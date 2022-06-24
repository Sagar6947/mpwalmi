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

    $com_project = strip_tags($_POST['com_project']);

    $inet_project = strip_tags($_POST['inet_project']);

    $inet_pro_agency = strip_tags($_POST['inet_pro_agency']);

    $pro_type = strip_tags($_POST['pro_type']);

    $pro_executed_area = strip_tags($_POST['pro_executed_area']);


    $pro_related = implode(',', $_POST['pro_related']);

    $research_publication = strip_tags($_POST['research_publication']);

    $tot_certified = strip_tags($_POST['tot_certified']);

    $teach_exp = strip_tags($_POST['teach_exp']);

    $subject_conducted =
        strip_tags($_POST['subject_conducted']);

    $training_level = strip_tags($_POST['training_level']);

    $AOTI = strip_tags($_POST['AOTI']);

    $TMA = strip_tags($_POST['TMA']);
    $ATCA = strip_tags($_POST['ATCA']);
    $training_modual = strip_tags($_POST['training_modual']);

    $special_achiev = strip_tags($_POST['special_achiev']);

    $other_info = strip_tags($_POST['other_info']);


    $sal =  "INSERT INTO `resource_person`(`name`, `age`, `designation`, `qualification`, `address`, `city`, `mobile`, `email`, `profession`, `grade`, `organisation`, `experience`, `specialization_area`, `o_specialization`, `com_project`, `inet_project`, `inet_pro_agency`, `pro_type`, `pro_executed_area`, `pro_related`, `research_publication`, `tot_certified`, `teach_exp`, `subject_conducted`, `training_level`, `AOTI`, `TMA`, `ATCA`, `training_modual`, `special_achiev`, `other_info`) VALUES ('$name','$age','$designation' , '$qualification' , '$address' , '$city' ,'$mobile' , '$email' , '$profession' , '$grade' , '$organisation' , '$experience' , '$specialization_area' , '$o_specialization' , '$com_project' , '$inet_project' , '$inet_pro_agency' , '$pro_type' , '$pro_executed_area' , '$pro_related' , '$research_publication' , '$tot_certified' , '$teach_exp' , '$subject_conducted'  , '$training_level' , '$AOTI' , '$TMA' , '$ATCA' ,'$training_modual'  , '$special_achiev' , '$other_info')";

    $run = mysqli_query($con, $sal);

    if ($run) {

        echo '<script>alert(" Implement form SUBMITTED");</script>';
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
    <title>Vacancy - M.P. Water and Land Management Institute, Bhopal</title>
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
                            <h2>Resource Person Form</h2>
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
                            <p align="justify">स्तोत्र परामर्शी व्यक्तियों की अभिरुचि आमंत्रण मध्य प्रदेश जल एवं भूमि प्रबंध संस्थान, मध्य प्रदेश ग्रामीण विकास विभाग के अंतर्गत एक स्वशासी संस्थान है, जो प्रमुख रूप से प्राकृतिक संसाधन, सिंचित एवं असिंचित कृषि, ग्रामीण विकास सॉफ्ट स्किल, कार्यालय प्रबंधन से संबंधित हितग्राहियों एवं अधिकारियों के लिए क्षमता वर्धन प्रशिक्षण सलाहकारिता सेवाएं एवं क्रियात्मक अनुसंधान कार्यक्रम आयोजित/ क्रियान्वित करता है । संस्थान की विभिन्न गतिविधियों के संपादन में सहयोग हेतु स्त्रोत परामर्शी व्यक्तियों के एम्पैनलमेंट हेतु योग्य एवं अनुभवी व्यक्तियों से अभिरुचि आमंत्रित की जाती है । व्यक्ति स्वयं का विवरण नीचे दिए लिंक पर स्थित फॉर्म में भरकर सबमिट करें । संस्थान द्वारा अभिरुचि की जांच कर उपयुक्त व्यक्तियों को एंपैनल किया जाएगा इस संबंध में संचालक वाल्मी का निर्णय अंतिम होगा ।।</p>
                            <h2><span>Resource Person Form</span></h2>
                            <form method="post" >
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
                                        <label class="col-form-label">Profession</label>
                                        <select name="profession" class="form-control">
                                            <option>Choose profession</option>
                                            <option value="service">Govt.(In Service)</option>
                                            <option value="retired">Govt.(retired)</option>
                                            <option value="private">Private</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Grade </label>
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
                                        <label class="col-form-label">Department/ Organisation</label>
                                        <input type="text" class="form-control" placeholder="Name of Department/ Organisation" name="organisation">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Experience</label>
                                        <input type="text" class="form-control" placeholder="Experience (in Yrs Only)" name="experience">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <label class="col-form-label">Prefared geographical region for working</label>
                                        <input type="text" class="form-control" placeholder="Prefered geographical region for working" name="geographical_region">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <label class="col-form-label">Area of Specialization</label>
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


                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="Ground-Water-Resource">
                                                Ground water Resource<br>

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

                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="Training-and-capacity-building">
                                                Training & Capacity Building<br>

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


                                                <input type="checkbox" id="vehicle2" name="specialization[]" value="Participation-planning  ">
                                                Participation planning <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <label class="col-form-label">Others Specialization</label>
                                        <input type="text" class="form-control" placeholder="Any Others Specialization (Pl specify )" name="o_specialization">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">No. of project</label>
                                        <input type="text" class="form-control" placeholder="No. of project completed ( No. only)" name="com_project">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">No. of International Project</label>
                                        <input type="text" class="form-control" placeholder="No. of International Project(No.only))" name="inet_project">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label class="col-form-label">Agency of International Project</label>
                                        <input type="text" class="form-control" placeholder="Name of Agency of International Project" name="inet_pro_agency">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <label class="col-form-label">Type of Project</label><br>
                                        <input type="radio" id="vehicle2" value="research-project" name="pro_type">
                                        Research Project

                                        <input type="radio" id="vehicle2" value="development-project" name="pro_type">
                                        Development Project
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <label class="col-form-label">Area in which project executed</label>
                                        <input type="text" class="form-control" placeholder="Area in which project executed" name="pro_executed_area">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <label class="col-form-label">Project Experience Domain</label>
                                        <div class="row">

                                            <div class="form-group col-md-4">
                                                <input type="checkbox" id="vehicle2" name="pro_related[][]" value="WRE">
                                                Water Resources Engineering<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[][]" value="agriculture-eng">
                                                Agriculture Engineering<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="social-science">
                                                Social Science<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="agriculture">
                                                Agriculturee<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="horticulture">
                                                Horticulture<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="cmputer-scienc">
                                                Computer science<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="panchayet-raj">
                                                Panchayet Raj<br>

                                            </div>

                                            <div class="form-group col-md-4">
                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="mnrega">
                                                MNREGA<br>


                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="srlm">
                                                SRLM<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="srlm">
                                                SRLM<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="national-health-mission">
                                                National Health Mission<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="watershed">
                                                Watershed<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="water&sanitation">
                                                Water & Sanitation<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="soil-water-conservation">
                                                Soil and Water Conservation<br>

                                            </div>

                                            <div class="form-group col-md-4">
                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="soft-skill-development">
                                                Soft Skill Development<br>


                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="spiritual">
                                                Spiritual<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="natural-resource-management">
                                                Natural Resource Management<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="honey-bee-farming">
                                                Honey Bee Farming<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="afforestation">
                                                Afforestation<br>

                                                <input type="checkbox" id="vehicle2" name="pro_related[]" value="GIS&Remote-sensing">
                                                GIS & Remote Sensing<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <label class="col-form-label">Special Achievements & Awards</label>
                                        <input type="text" class="form-control" placeholder="Special Achievements & Awards" name="special_achiev">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <label class="col-form-label">Other Information</label>
                                        <input type="text" class="form-control" placeholder="Other Information" name="other_info">
                                    </div>
                                </div>
                                <div class="col-sm-12 Textarea-btn">
                                    <button class="btn btn-primary btn-padding btn-animated" name="submit" type="submit">Submit</button>
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