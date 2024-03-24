<!DOCTYPE html>
<html lang="en">
<head>
<style>
*{
    box-sizing: border-box;
}
/* html{
    display: flex;
    justify-content: center;
    align-items: center;
    min-width:100%;
} */
body{
    overflow-x: hidden;
    font-size: larger;
    background-image:url(blurspot.png) ;
    background-repeat: no-repeat, no-repeat;
    background-size:100% 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.maincontainer{
    margin-top: 3%;
    display: flex;
    justify-content: center;
    flex-direction:column ;
    align-items: center;
    margin-right: 10%; 
    margin-left: 10%;
    background-color:#fdfdfd;
    border-radius: 20px;
	width:60%;
}

.hero{
    background-color:#fdfdfd;
    font-family:serif; 
    color:rgb(44, 41, 44);
    border-radius: 5px;
}
.form
{
    width:95%;
}

legend{
    background-color: #fdfdfd;
    padding-left:7px;
    padding-right:7px;
    font-family:Tahoma;
    font-size: 1.5em;
}

.row {
    display: flex;
    gap:1em;
    width:100%;
    flex-direction: row;
    border-radius: 5px;
    padding: 2px;
    align-items:center;
  }

  .prsnlinfo , .bookinfo, .otherinfo,.fieldsetsectn{
    display: flex;
    flex-direction:column ;
    justify-content: center;
    align-content: center;
    width:95%;
    background-color: #fdfdfd; 
    border-radius: 1em;
    border: 0;
    font-family: arial;
    font-size: 1em;
  }
  .fieldsetsectn{
    margin-top: -1.5%;
    /* margin-bottom: 0.5%; */
    

  }
  
.prsnlinfo {
    display:flex;
    align-content: space-between;
    justify-content: center;
    align-items: center;
    margin-top: 4%;
    margin-bottom: 4%;
    margin-left: 1%;
    margin-right: 1%;
    box-shadow: 0 2px 5px rgba(118, 118, 118, 0.5);
}
.bookinfo{
    display:flex;
    align-content: space-between;
    justify-content: center;
    align-items: center;
    margin-top: 4%;
    margin-bottom: 4%;
    margin-left: 1%;
    margin-right: 1%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
}
.otherinfo{
    display:flex;
    align-content: space-between;
    justify-content: center;
    align-items: center;
    margin-top: 4%;
    margin-bottom: 4%;
    margin-left: 1%;
    margin-right: 1%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
}

label{
    width:15%;
    font-size: 0.94em;
}
input{
    display: flex;
    flex-direction:column ;
    align-content: center;
    justify-content: center;
    align-items: center;
    width: 90%;
    height: 30px;
    border-radius: 3px;
    border-width:0.1em;
    border-color: #e0aaff;
    background-color: white;
    font-family:'';
    font-size: 1em;
}


select {
    width: 50%;
    font-size: 1.15rem;
    padding: 0.3em 0.8em;
    background-color: #fff;
    border: 1px solid #caced1;
    border-color: #e0aaff;
    border-radius: 0.25rem;
    color: #000;
    cursor: pointer;
}
.publicationdate{
    width:50%
}


.inputbox {
    position:relative;
    width:30%;
}

.inputbox span{
    position:absolute;
    transform: translateY(-120%);
    left:0;
    padding:0.5em;
    padding-left: 1.2em;
    padding-top:1em;
    pointer-events:none;
    font-size: 0.5em;
    color:rgb(186, 186, 186);
    text-transform: uppercase;
    transition: 0.2s ease-in-out ;
}

.inputbox input:valid ~ span,
.inputbox input:focus ~ span{
    color: #5a189a;
    transform: translateY(-3.8em) translateX(.8em);
    font-size: 0.5em;
    padding: 0 5px;
    background-color: rgb(255, 255, 255);
    letter-spacing: 0.15em;
    font-family: serif;
}
.submit-button {
    background-color: rgb(150, 76, 199);
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-style: none;
    margin: 2%;
    transition:0.3s ;

  }
  .submit-button:hover {
    background-color: rgb(172, 112, 212);
    transform: scale(1.1);
    box-shadow:0 2px 5px rgba(0, 0, 0, 0.5); 
    color: black;
    transition:0.3s ;
  }
  .radio-options {
    display: inline-flex;
    align-items: center;
}

.radio-options input[type="radio"] {
    margin-right: 10px;
}
.radio-options label {
    margin-right: 10px; 
}
.row1{
   margin-left:50px;
   }
.inputbox {
        margin: 15px 0;
        padding: 0; 
    }
    .inputbox input {
        box-shadow: none; 
    }
 .row1 {
        margin-left: 0; 
    }

    @media only screen and (max-width: 768px) {
        .maincontainer {
            margin-left: 5%; 
            margin-right: 5%;
        }

        .inputbox {
            margin: 10px 0; 
        }
    }

    @media only screen and (max-width: 576px) {
        .maincontainer {
            width: 90%;
            margin-left: 5%; 
            margin-right: 5%;
        }

        .inputbox {
            margin: 5px 0; 
        }

        label,
        input,
        select {
            font-size: 0.8em;
        }

        .section {
            transform: none; 
        }

        .fieldsetsectn .row {
            flex-wrap: wrap; 
        }

        .fieldsetsectn .row > * {
            width: 100%; 
        }
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Books</title>
    <link rel="stylesheet" href="e_content.css">
</head>
<body>

<?php
//submit following to database
if($_SERVER['REQUEST_METHOD']=='POST')
{
        $uni=$_POST['university'];
        $department=$_POST['department'];
        $faculty=$_POST['faculty'];
        $empid=$_POST['emp_id'];
        $otherauthor=$_POST['otherauthor'];
        $coauthor= $_POST['co-author'];
        $booktitle=$_POST['booktitle'];
        $National=$_POST['National'];
        $publicationdate=$_POST['publicationdate'];
        $pubyear=$_POST['pubyear'];
        $edition=$_POST['edition'];
        $pagefrom=$_POST['pagefrom'];
        $pageto=$_POST['pageto'];
        $scopus=$_POST['scopus'];
        $listedin=$_POST['listedin'];
        $wos=$_POST['wos'];
        $peer=$_POST['peer'];
        $issn=$_POST['issn'];
        $isbn=$_POST['isbn'];
        $pubname=$_POST['pubname'];
        $affltn=$_POST['affltn'];
        $corrauthor=$_POST['corrauthor'];
        $citind=$_POST['citind'];
        $nocit=$_POST['nocit'];
        if(isset($_FILES['evdupload']) && $_FILES['evdupload']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['evdupload']['name'];
        $file_tmp = $_FILES['evdupload']['tmp_name'];
        // Move uploaded file to desired directory
        $upload_directory = 'uploads/'; // Change this to your desired directory
        $destination = $upload_directory . $file_name;
        if(move_uploaded_file($file_tmp, $destination)) {
            // File uploaded successfully
            // You can save $destination to your database if you need to store the file path
            echo '<script>alert("File uploaded successfully")</script>';
        } else {
            echo "Error uploading file.";
        }
    }
        $othrinfo=$_POST['othrinfo'];
        $ref=$_POST['ref'];
    

//conection to database

$servername="localhost";
$username="root";
$password="";
$database="textlibrary-website";
$conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
    {
      die("The connection to DB wasn't established ".mysqli_connect_error($conn));
    }


    $sql="INSERT INTO `booksbyfaculty` (`University`, `Department`, `Faculty`, `Employee ID`, `other Author`, `Co-author`, `booktitle`, `region`, `pubdate`, `pubyear`, `volume`, `pagefrom`, `pageto`, `scopus`, `listedin`, `wos`, `peer`, `issn`, `isbn`, `pubname`, `affltn`, `corrauthor`, `citind`, `nocit`, `evdupload`, `othrinfo`, `ref`) VALUES ('$uni', '$department', '$faculty', '$empid', '$otherauthor', '$coauthor', '$booktitle', '$National', '$publicationdate', '$pubyear', '$edition', '$pagefrom', '$pageto', '$scopus', '$listedin', '$wos', '$peer','$issn', '$isbn', '$pubname', '$affltn', '$corrauthor', '$citind', '$nocit', '$destination', '$othrinfo', '$ref')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo '<script>alert("Success! Your details were successfull saved")</script>';
    }
    else
    {
        echo "failed adding data".mysqli_query_error($conn);
    } 
  
}
?>

<div class="maincontainer">
    <div class="hero">
          <h1>Books Published by Faculty/ Scientist</h1>
        <p>For various platforms including e-PG-Pathshala, CEC, MOOCs, NPTEL, and Institutional LMS.</p>
        <hr>
    </div>
    <form class="form" action="b.php" method="post" enctype="multipart/form-data">
    <div class="prsnlinfo">
        <fieldset class="fieldsetsectn">

            <legend class ="section">Personal Information</legend>
            <div class="row">
                <label for="university">University:</label>
                    <div class="inputbox">
                        <input type="text" name="university" required="required">
                        <span>University name</span>
                    </div>
            
                <label for="Department">Department:</label>
                    <div class="inputbox">
                        <input type="text" name="department" required >
                        <span>Department Name</span>
                    </div>
            </div>

            <div class="row">
                <label for="faculty">Faculty/ Scientist:</label>
                    <div class="inputbox">
                        <input type="text" name="faculty" required="required">
                        <span>Enter name </span>
                    </div>
            
                <label for="emp_id">Employee ID:</label>
                    <div class="inputbox">
                        <input type="number" name="emp_id" required="required" min="1" style="width:20%;">
                        <span>ID</span>
                    </div>
            </div>

            <div class="row">
                <label for="faculty">Name of other Author/s (If any):</label>
                    <div class="inputbox">
                        <input type="text" name="otherauthor" required="required">
                        <span>Other Author/s </span>
                    </div>
            
                <label for="emp_id">First/ Corresponding/ Co-author:</label>
                    <div class="inputbox">
                        <input type="text" name="co-author" required="required" min="1" >
                        <span>Please specify</span>
                    </div>
            </div>
            
        </fieldset>
    </div>

    <div class="bookinfo">
        <fieldset class="fieldsetsectn">

            <legend class ="section">Book Information</legend>
            <div class="row">
                <label for="booktitle">Title of the Book:</label>
                    <div class="inputbox">
                        <input type="text" name="booktitle" required="required">
                        <span>Title</span>
                    </div>
                    <label for="cars">Region:</label>
					<div class="inputbox" id="select">
                            <select name="National" id="National">
                            <option value="National">National</option>
                            <option value="International">International</option>
                            </select>
                      </div>
            </div>

            <div class="row">
                <label for="faculty">Publication Date:</label>
    <div class="publicationdate inputbox row1">
        <input type="date" name="publicationdate" required="required" style="width:150px;">
    </div>
            
                <label for="pubyear">Publication year:</label>
                    <div class="inputbox">
                        <input type="number" name="pubyear" required="required" min="1" >
                        <span>year</span>
                    </div>
            </div>

            <div class="row">
                <label for="edition">Volume/edition:</label>
                    <div class="inputbox">
                        <input type="number" name="edition" required="required">
                        <span>edition</span>
                    </div>
               <label for="page">Page</label>
                    <div class="inputbox">
                        <input type="number" name="pagefrom" required="required"  min="1">
                        <span>From</span>
                        <input type="number" name="pageto" required="required" min="2">
                        <span>To</span>
                    </div>
            </div>
            
        </fieldset>
        
    </div>
	<div class="otherinfo">
        <fieldset class="fieldsetsectn">

              <legend class="section">Other Information</legend>
                   <div class="row">
    <label for="listed in scopus">Listed in Scopus: </label>
    <div class="radio-options radio-group">
        <input name="scopus" type="radio" value="y" id="scopus-yes-option" />
        <label for="scopus-yes-option">Yes</label>
        <input name="scopus" type="radio" value="n" id="scopus-no-option" />
        <label for="scopus-no-option">No</label>
    </div>
    <label for="listedin" style="margin-left:100px">Listed in :</label>
	<div class="inputbox" id="select" >
        <select name="listedin" id="listedin">
            <option>UGC</option>
            <option>PubMed</option>
            <option>ICI</option>
            <option>Others</option>
        </select>
    </div>
</div>
<div class="row">
    <label for="wos">Listed in Web of Science (Thomas Reuters) (Clarivate Analytics): </label>
    <div class="radio-options radio-group">
        <input name="wos" type="radio" value="y" id="wos-yes-option" />
        <label for="wos">Yes</label>
        <input name="wos" type="radio" value="n" id="wos-no-option" />
        <label for="wos">No</label>
    </div>
    <label for="peer" style="margin-left:100px">Peer Reviewed:</label>
    <div class="radio-options radio-group">
        <input name="peer" type="radio" value="y" id="peer-review-yes-option" />
        <label for="peer">Yes</label>
        <input name="peer" type="radio" value="n" id="peer-review-no-option" />
        <label for="peer">No</label>
    </div>
</div>


            <div class="row">
                <label for="issn">ISSN:</label>
                    <div class="inputbox">
                        <input type="text" name="issn" required="required">
                        <span>ISSN </span>
                    </div>
            
                <label for="isbn">ISBN:</label>
                    <div class="inputbox">
                        <input type="text" name="isbn" required="required" >
                        <span>ISBN</span>
                    </div>
            </div>
             <div class="row">
                <label for="pubname">Name of Publisher:</label>
                    <div class="inputbox">
                        <input type="text" name="pubname" required="required">
                        <span>Publisher name </span>
                    </div>
            
                <label for="affltn">Institutional affiliations:</label>
                    <div class="inputbox">
                        <input type="text" name="affltn" required="required" >
                        <span>Institutional affiliations</span>
                    </div>
            </div>
			 <div class="row">
                <label for="corrauthor">Correponding Author:</label>
                    <div class="inputbox">
                        <input type="text" name="corrauthor" required="required">
                        <span>Correponding Author</span>
                    </div>
            
                <label for="citind">Citation Index:</label>
                    <div class="inputbox">
                        <input type="text" name="citind" required="required" >
                        <span>Citation Index</span>
                    </div>
            </div>
			 <div class="row">
                <label for="nocit">Number of citations:</label>
                    <div class="inputbox">
                        <input type="number" name="nocit" required="required">
                        <span>Number of citations</span>
                    </div>
            
              <label for="evdupload">Evidence (Upload):</label>
          <div class="inputbox">
             <input type="file" name="evdupload" id="upload" required accept=".pdf, .doc, .docx"> 
              </div>  
            </div>
			 <div class="row">
                <label for="othrinfo">If any other information:</label>
                    <div class="inputbox">
                        <input type="text" name="othrinfo" required="required">
                        <span>Any information</span>
                    </div>
            
                <label for="ref">Ref:</label>
                    <div class="inputbox">
                        <input type="text" name="ref" required="required" >
                        <span>Ref</span>
                    </div>
            </div>
        </fieldset>
    </div>

    <button type="submit" class="submit-button">Submit</button>
</div>
</form>
</body>
</html>
