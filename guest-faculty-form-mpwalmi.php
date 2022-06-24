<?php

include('admin/config.php');
if (isset($_POST['submit'])) {


    $name = strip_tags($_POST['name']);
    $age = strip_tags($_POST['age']);
    $designation = strip_tags($_POST['designation']);
    $qualification = strip_tags($_POST['qualification']);
    $address = strip_tags($_POST['address']);
    $city = strip_tags($_POST['city']);
    $mobile = strip_tags($_POST['mobile']);
    $email = strip_tags($_POST['email']);
    $profession = strip_tags($_POST['profession']);
    $grade = strip_tags($_POST['grade']);
    $organisation = strip_tags($_POST['organisation']);
    $experience = strip_tags($_POST['experience']);
    $specialization_area = implode(',', $_POST['specialization']);
    $o_specialization = strip_tags($_POST['o_specialization']);

    $tot_certified = strip_tags($_POST['tot_certified']);

    $teach_exp = strip_tags($_POST['teach_exp']);

    $subject_conducted =
        strip_tags($_POST['subject_conducted']);

    $training_level = strip_tags($_POST['training_level']);
    $other_tra = strip_tags($_POST['other_tra']);
    $train_meth = strip_tags($_POST['train_meth']);

    $train_ann = strip_tags($_POST['train_ann']);
    $material = strip_tags($_POST['material']);
    $award = strip_tags($_POST['award']);
    $other_info = strip_tags($_POST['other_info']);



    $sal =  "INSERT INTO `faculty`( `name`, `age`, `designation`, `qualification`, `address`, `city`, `mobile`, `email`, `profession`, `grade`, `department`, `experience`, `specialization`, `o_specialization`, `tot_certified`, `teach_exp`, `subject_conducted`, `training_level`, `other_tra`, `train_meth`, `train_ann`, `material`, `award`, `other_info`)   VALUES    ('$name','$age','$designation' , '$qualification' , '$address' , '$city' ,'$mobile' , '$email' , '$profession' , '$grade' , '$organisation' , '$experience' , '$specialization_area' , '$o_specialization' , '$tot_certified' , '$teach_exp' , '$subject_conducted' , '$training_level' , '$other_tra' , '$train_meth' , '$train_ann' , '$material' , '$award', '$other_info')";

    $run = mysqli_query($con, $sal);

    if ($run) {

        echo '<script>alert(" Faculty form SUBMITTED");</script>';
    } else {
        echo '<script>alert("Something Went Wrong");</script>';
    }
}





?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apply For Faculty - M.P. Water and Land Management Institute, Bhopal</title>
    <meta name="author" content="Webful Creations">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'header-link.php'; ?>
</head>

<body style="background-image: url('assets/images/park/wp3556796.jpg');">
    <div class="main-container">
        <?php include 'header.php'; ?>

        <div class="title-section dark-bg grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-padding-y">
                        <div class="title-section-text">
                            <h1>Faculty Empanelment Form</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="appointment grey-bg grey-bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 ">
                        <div class="appointment-form">
                            <br>
                            <br>
                            <!-- <h2><span>Faculty Empanelment Form</span></h2> -->
                            <p align="justify">स्तोत्र परामर्शी व्यक्तियों की अभिरुचि आमंत्रण मध्य प्रदेश जल एवं भूमि प्रबंध संस्थान, मध्य प्रदेश ग्रामीण विकास विभाग के अंतर्गत एक स्वशासी संस्थान है, जो प्रमुख रूप से प्राकृतिक संसाधन, सिंचित एवं असिंचित कृषि, ग्रामीण विकास सॉफ्ट स्किल, कार्यालय प्रबंधन से संबंधित हितग्राहियों एवं अधिकारियों के लिए क्षमता वर्धन प्रशिक्षण सलाहकारिता सेवाएं एवं क्रियात्मक अनुसंधान कार्यक्रम आयोजित/ क्रियान्वित करता है । संस्थान की विभिन्न गतिविधियों के संपादन में सहयोग हेतु स्त्रोत परामर्शी व्यक्तियों के एम्पैनलमेंट हेतु योग्य एवं अनुभवी व्यक्तियों से अभिरुचि आमंत्रित की जाती है । व्यक्ति स्वयं का विवरण नीचे दिए लिंक पर स्थित फॉर्म में भरकर सबमिट करें । संस्थान द्वारा अभिरुचि की जांच कर उपयुक्त व्यक्तियों को एंपैनल किया जाएगा इस संबंध में संचालक वाल्मी का निर्णय अंतिम होगा ।।</p>
                            <h2><span>Faculty Empanelment Form</span></h2>
                            <form method="post">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Full Name </label>
                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Age ( as on Today) </label>
                                        <input type="text" class="form-control" placeholder="Age" name="age">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Designation </label>
                                        <input type="text" class="form-control" placeholder="Designation" name="designation">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Qualification(highest) </label>
                                        <input type="text" class="form-control" placeholder="Qualification" name="qualification">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Address </label>
                                        <input type="text" class="form-control" placeholder="Address" name="address">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">City </label>
                                        <input type="text" class="form-control" placeholder="City" name="city">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Mobile No. </label>
                                        <input type="text" class="form-control" placeholder="Mobile" name="mobile">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">EMAIL ID </label>
                                        <input type="text" class="form-control" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Profession (Mark only one oval.) </label>
                                        <select name="profession" class="form-control">
                                            <option>Choose profession</option>
                                            <option value="service">Govt.(In Service)</option>
                                            <option value="retired">Govt.(retired)</option>
                                            <option value="private">Private</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Grade (Applicable for Government Employee)</label>
                                        <select name="grade" class="form-control">
                                            <option>Grade (Applicable for Government Employee)</option>
                                            <option value="class1">Class-I</option>
                                            <option value="class2">Class-II</option>
                                            <option value="class3">Class-III</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Name of Department/ Organisation </label>
                                        <input type="text" class="form-control" placeholder="Department/Organisation" name="organisation">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Experience (in Yrs Only) </label>
                                        <input type="text" class="form-control" placeholder="Experience" name="experience">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <label class="col-form-label">Area of Specialization </label>
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="WRE">
                                                Water Resources Engineering<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="agriculture-eng">
                                                Agriculture Engineering<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="social-science">
                                                Social Science<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="agriculture">
                                                Agriculturee<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="horticulture">
                                                Horticulture<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="cmputer-scienc">
                                                Computer science<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="panchayet-raj">
                                                Panchayet Raj<br>

                                            </div>


                                            <div class="form-group col-md-4">
                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="mnrega">
                                                MNREGA<br>
                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="srlm">
                                                SRLM<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="srlm">
                                                SRLM<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="national-health-mission">
                                                National Health Mission<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="watershed">
                                                Watershed<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="water&sanitation">
                                                Water & Sanitation<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="soil-water-conservation">
                                                Soil and Water Conservation<br>


                                            </div>



                                            <div class="form-group col-md-4">

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="soft-skill-development">
                                                Soft Skill Development<br>
                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="spiritual">
                                                Spiritual<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="natural-resource-management">
                                                Natural Resource Management<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="honey-bee-farming">
                                                Honey Bee Farming<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="afforestation">
                                                Afforestation<br>

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="GIS&Remote-sensing">
                                                GIS & Remote Sensing<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label"> Any Others Specialization (Pls specify )</label>
                                        <input type="text" class="form-control" placeholder="Department/Organisation" name="o_specialization">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label"> Whether TOT certified ?
                                            Check all that apply </label></br>
                                        <input type="radio" name="tot_certified" value="yes">
                                        YES

                                        <input type="radio" name="tot_certified" value="no">
                                        No
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Teaching Experience (in Yrs Only) </label>
                                        <input type="text" class="form-control" name="teach_exp">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Mention in which subject trainings conducted </label>
                                        <input type="text" class="form-control" name="subject_conducted">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <label class="col-form-label">Level of training Conducted </label>
                                        <br>
                                        <input type="radio" name="training_level" value="village">
                                        Village

                                        <input type="radio" name="training_level" value="block">
                                        Block

                                        <input type="radio" name="training_level" value="district">
                                        District

                                        <input type="radio" name="training_level" value="State">
                                        State
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Association with other training lnstitute (if any) </label>
                                        <input type="text" class="form-control" name="other_tra">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Training Methodology Adopted</label>
                                        <input type="text" class="form-control" name="train_meth">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Average Number of Training Conducted annually</label>
                                        <input type="text" class="form-control" name="train_ann">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label"> Please Mention Titles of training modules/material prepared </label>
                                        <input type="text" class="form-control" name="material">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Special Achievements & Awards (if any) </label>
                                        <input type="text" class="form-control" name="award">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Other lnformation (if any) </label>
                                        <input type="text" class="form-control" name="other">
                                    </div>
                                </div>
                                <div class="col-sm-12 Textarea-btn">
                                    <button name="submit" class="btn btn-primary btn-padding btn-animated" type="submit">Submit</button>
                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    <?php include 'footer.php' ?>
    </div>
</body>

</html>