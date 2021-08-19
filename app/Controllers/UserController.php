<?php

namespace App\Controllers;
use App\Models\User;

class UserController extends BaseController
 {
    public function index()
 {
        $user = new User();
        $data['user']  = $user->findAll();

        return view( 'User/index', $data );
    }

    public function add()
 {
        // echo'<pre>';
        // print_r( base_url() );
        // exit;
        if ( $this->request->getPost( 'submit' ) == true ) {

            $citys = array( 'city'=>implode( ',', $this->request->getPost( 'city' ) ) );
            $language = array( 'language'=>implode( ',', $this->request->getPost( 'language' ) ) );
            $img = $this->request->getFile( 'image' );
            $user = new User();
            $data = [
                'name'=>$this->request->getPost( 'name' ),
                'address'=>$this->request->getPost( 'address' ),
                'pincode'=>$this->request->getPost( 'pincode' ),
                'gender'=>$this->request->getPost( 'gender' ),
                'mobile_number'=>$this->request->getPost( 'mobile_number' ),
                'language'=>$language['language'],
                'city'=>$citys['city'],
                'email_id'=>$this->request->getPost( 'email_id' ),
                'status'=>1,
                'state'=>$this->request->getPost( 'state' ),
                'created'=>date( 'Y-m-d h:i:s' )

            ];
            $user->save( $data );
            return redirect()->to( base_url( '/' ) )->with( 'status', 'User Added successfully' );

        } else {
            return view( 'User/add' );
        }
    }

    function edit( $id ) {
        if ( $this->request->getPost( 'submit' ) == true ) {
            if ( empty( $id ) ) {
                $update_id = $this->request->getPost( 'id' );
            } else {
                $update_id = $id;
            }
            $user = new User();
            $file = $this->request->getFile( 'image' );
            $newName = $this->request->getPost( 'user_image' ) ;
            if ( $file->getTempName() ) {

                if ( $file->isValid() && ! $file->hasMoved() )
 {
                    $newName = $file->getRandomName();
                    $file->move( 'uploads/', $newName );

                }
            }

            $citys = array( 'city'=>'' );
            if ( $this->request->getPost( 'city' ) ) {
                $citys = array( 'city'=>implode( ',', $this->request->getPost( 'city' ) ) );

            }
            $language = array( 'language'=>implode( ',', $this->request->getPost( 'language' ) ) );
            $data = [
                'name'=>$this->request->getPost( 'name' ),
                'address'=>$this->request->getPost( 'address' ),
                'pincode'=>$this->request->getPost( 'pincode' ),
                'gender'=>$this->request->getPost( 'gender' ),
                'mobile_number'=>$this->request->getPost( 'mobile_number' ),
                'language'=>$language['language'],
                'city'=>$citys['city'],
                'email_id'=>$this->request->getPost( 'email_id' ),
                'status'=>1,
                'image'=>$newName,
                'state'=>$this->request->getPost( 'state' ),
                'modified'=>date( 'Y-m-d h:i:s' )

            ];
            $user->update( $update_id, $data );
            return redirect()->to( base_url( '/' ) )->with( 'status', 'User Updated successfully' );
        } else {
            $user = new User();
            $data['user']  = $user->find( $id );

            return view( 'User/edit', $data );
        }
    }

    function delete( $id ) {
        $user = new User();
        $user->delete( $id );
        return redirect()->to( base_url( '/' ) )->with( 'status', 'User Deleted successfully' );

    }

    public function view( $id )
 {
        $user = new User();
        $data['user']  = $user->find( $id );

        return view( 'User/view', $data );

    }
}
