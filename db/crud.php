<?php

    class crud{
        private $db;

        function __construct($conn){
            $this->db = $conn;
        }

        public function insert($firstname, $lastname, $dob, $email, $contact, $specialty, $avatar_path){
            try {
                $sql = "INSERT INTO attendee(firstname, lastname, dateofbirth, emailadress, contacnumber, specialty_id, avatar_path) VALUES (:firstname, :lastname, :dob, :email, :contact, :specialty, :avatar_path)";
                
                $stmt = $this->db->prepare($sql);

                $stmt->bindValue(':firstname', $firstname);
                $stmt->bindValue(':lastname',$lastname);
                $stmt->bindValue(':dob',$dob);
                $stmt->bindValue(':email',$email);
                $stmt->bindValue(':contact',$contact);
                $stmt->bindValue(':specialty',$specialty);
                $stmt->bindValue(':avatar_path',$avatar_path);

                $stmt->execute();

                return true;
                
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editAttendee($id, $firstname, $lastname, $dob, $email, $contact, $specialty){
            
            try {
                
                $sql = "UPDATE `attendee` set `firstname` =:firstname, `lastname`= :lastname, `dateofbirth`= :dob, `emailadress`= :email, `contacnumber`= :contact, `specialty_id`= :specialty 
                    WHERE atendee_id = :id";

                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':id', $id);
                $stmt->bindValue(':firstname', $firstname);
                $stmt->bindValue(':lastname',$lastname);
                $stmt->bindValue(':dob',$dob);
                $stmt->bindValue(':email',$email);
                $stmt->bindValue(':contact',$contact);
                $stmt->bindValue(':specialty',$specialty);

                $stmt->execute();

            return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getAttendees(){
            try{
                $sql = "SELECT * FROM attendee a inner join specialty s on a.specialty_id = s.specialty_id";
                $result = $this->db->query($sql);
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
                }
        }

        public function getAttendeeDetails($id){
            try{
                $sql = "SELECT * FROM attendee a inner join specialty s on a.specialty_id = s.specialty_id where atendee_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
                }
        }

        public function getSpecialties(){
            try{
                
                $sql = "SELECT * FROM specialty";
                $result = $this->db->query($sql);
                return $result;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
                }
        }

        public function deleteAttendee($id){
            
            try{
                $sql = "delete from attendee where atendee_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':id', $id);
                $stmt->execute();
                return true;
                
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
                }
        }

    }
        
?>