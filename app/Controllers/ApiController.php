<?php
namespace App\Controllers;
use App\Models\User;

class ApiController extends BaseController
 {
    function isJson( $data ) {
        return ( json_decode( $data ) != NULL ) ? true : false;
    }

    function index()
 {
        $user = new User();
        $data['user']  = $user->findAll();
        echo json_encode( $data );
        exit;

    }

    function add_user()
 {
        if ( $this->isJson( file_get_contents( 'php://input' ) ) ) {
            $data = json_decode( file_get_contents( 'php://input' ) );
            $datas = get_object_vars( $data );
            $user = new User();
            $inser_data = [
                'name'=>$datas ['name'],
                'address'=>$datas ['address'],
                'pincode'=>$datas ['pincode'],
                'gender'=>$datas ['gender'],
                'mobile_number'=>$datas ['mobile_number'],
                'language'=>$datas ['language'],
                'city'=>$datas['city'],
                'email_id'=>$datas ['email_id'],
                'status'=>1,
                'state'=>$datas ['language'],
                'created'=>date( 'Y-m-d h:i:s' )

            ];

            if ( $user->save( $inser_data ) ) {
                $response = array( 'status' => true, 'message' => 'data Inerted' );

            } else {
                $response = array( 'status' => false, 'message' => 'data Not Inerted' );
            }

        } else {
            $response = array( 'requestSuccessful' => false, 'code' => '400', 'message' => 'JSON is Not Valid' );
            header( 'HTTP/1.1 400 Bad Request' );
        }
        echo json_encode( $response );
        // exit;
    }

    function edit_user() {

        if ( $this->isJson( file_get_contents( 'php://input' ) ) ) {
            $data = json_decode( file_get_contents( 'php://input' ) );
            $datas = get_object_vars( $data );
            $update_id = $datas ['id'];
            $user = new User();
            $inser_data = [
                'name'=>$datas ['name'],
                'address'=>$datas ['address'],
                'pincode'=>$datas ['pincode'],
                'gender'=>$datas ['gender'],
                'mobile_number'=>$datas ['mobile_number'],
                'language'=>$datas ['language'],
                'city'=>$datas['city'],
                'email_id'=>$datas ['email_id'],
                'status'=>1,
                'state'=>$datas ['language'],
                'created'=>date( 'Y-m-d h:i:s' )

            ];

            if ( $user->update( $update_id, $data ) ) {
                $response = array( 'status' => true, 'message' => 'data Updated' );

            } else {
                $response = array( 'status' => false, 'message' => 'data Not Updated' );
            }

        } else {
            $response = array( 'requestSuccessful' => false, 'code' => '400', 'message' => 'JSON is Not Valid' );
            header( 'HTTP/1.1 400 Bad Request' );
        }
        echo json_encode( $response );
        // exit;

    }

    function delete_user() {
        if ( $this->isJson( file_get_contents( 'php://input' ) ) ) {
            $data = json_decode( file_get_contents( 'php://input' ) );
            $datas = get_object_vars( $data );
            $id = $datas ['user_id'];
            $user = new User();
            $user->delete( $id );
            $response = array( 'status' => true,  'message' => 'User has been deleted' );
        } else {
            $response = array( 'requestSuccessful' => false, 'code' => '400', 'message' => 'JSON is Not Valid' );
            header( 'HTTP/1.1 400 Bad Request' );
        }
        echo json_encode( $response );
    }

    function get_user_details()
 {
        if ( $this->isJson( file_get_contents( 'php://input' ) ) ) {
            $data = json_decode( file_get_contents( 'php://input' ) );
            $datas = get_object_vars( $data );
            $id = $datas ['user_id'];
            $user = new User();
            $user_details = $user->find( $id );
            $response = array( 'status' => true, 'user_details'=>$user_details );
        } else {
            $response = array( 'requestSuccessful' => false, 'code' => '400', 'message' => 'JSON is Not Valid' );
            header( 'HTTP/1.1 400 Bad Request' );
        }
        echo json_encode( $response );
    }
}
