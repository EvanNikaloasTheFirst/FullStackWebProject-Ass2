<?php//namespace jobs\Controllers;//require 'as2/DatabaseTable.php';//require 'jobs/Controllers/Job.php';require 'jobs/Controllers/Enquiry.php';class testEnquiriesFormTest extends \PHPUnit\Framework\TestCase {    private $controller;    public function setUp(){        $pdo = new \PDO('mysql:host=mysql;dbname=job;charset=utf8', 'student', 'student');        $enquiryTable = new \as2\DatabaseTable($pdo, 'enquiry', 'id');        $this->controller = new \jobs\Controllers\Enquiry($enquiryTable);    }    public function testEnquiryApplyAllBlank(){        $invalidUser = [                'name' => '',                'email' =>'',                'telephone' => '',                'enquiry' => '',                'userId' => ''        ];        $errors = $this->controller->testEnquiryApplyAllBlank($invalidUser);        $this->assertEquals(count($errors),5);    }    public function testEnquiryApplyBlankName(){        $invalidUser = [            'name' => '',            'email' =>'xx',            'telephone' => 'xx',            'enquiry' => 'xx',            'userId' => 'xx'        ];        $errors = $this->controller->testEnquiryApplyBlankName($invalidUser);        $this->assertEquals(count($errors),1);    }    public function testEnquiryApplyBlankEmail(){        $invalidUser = [            'name' => 'xx',            'email' =>'',            'telephone' => 'xx',            'enquiry' => 'xx',            'userId' => 'xx'        ];        $errors = $this->controller->testEnquiryApplyBlankEmail($invalidUser);        $this->assertEquals(count($errors),1);    }//    public function testEnquiryApplyBlankEnquiry(){//        $invalidUser = [//            'name' => 'xx',//            'email' =>'',//            'telephone' => 'xx',//            'enquiry' => '',//            'userId' => 'xx'////        ];////        $errors = $this->controller->testEnquiryApplyBlankEnquiry($invalidUser);//        $this->assertEquals(count($errors),1);//    }    public function testEnquiryApplyBlankEnquiryResponse(){        $invalidUser =            ['id' => 'xx',            'name' => 'xx',            'email' => 'xx',            'EnquiryResponse' => '',            'Staffid' =>'xx',            'completed' => 'xx'        ];        $errors = $this->controller->testEnquiryApplyBlankEnquiryResponse($invalidUser);        $this->assertEquals(count($errors),1);    }    }?>