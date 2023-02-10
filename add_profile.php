<?php
    include '../body/upper.php';
?>

<section class="home-section ms-3 p-5 bg-light rounded shadow">
  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
  <div class="page-breadcrumb border-bottom border-dark mb-3">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h3 class="text-dark fw-bold"><i class="fa-solid fa-graduation-cap me-2"></i></i>Scholarship</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Scholarship</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

  <div class="progress">
    <div class="progress-bar progress-bar-striped bg-success active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <form id="regiration_form" action="add_profile_query.php"  method="post">
  <fieldset>
  <h2 class="font-monospace pt-3 border-bottom border-secondary">STUDENT INFORMATION:</h2>
  <div class="container">
          <label for="message-text" class="col-form-label">Student Number:</label>
          <input type="text" name="stud_id" placeholder=""></input><br>
          <label for="message-text" class="col-form-label">Course:</label>
          <input type="text" name="course" placeholder=""></input>
          <label for="message-text" class="col-form-label">Year & Section:</label>
          <input type="text" name="year_section" placeholder=""></input><br>
          <label for="message-text" class="col-form-label">Status:</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Regular">
              <label class="form-check-label" for="inlineRadio1">Regular</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Irregular">
              <label class="form-check-label" for="inlineRadio2">Irregular</label>
            </div>
  </div>
    <input type="button" name="password" class="next btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
  <h2 class="font-monospace pt-3 border-bottom border-secondary">PERSONAL INFORMATION:</h2>
    <div class="container  p-3">
            <div class="div">
              <label for="message-text" class="col-form-label">Name:</label>
              <input type="text" name="lname" placeholder="Last Name"></input>
              <input type="text" name="fname" placeholder="First Name"></input>
              <input type="text" name="mname" placeholder="Middle Name"></input>
            </div>
            <label for="message-text" class="col-form-label">Nickname:</label>
            <input type="text" name="nname" placeholder=""></input>
            <label for="message-text" class="col-form-label">Date of Birth</label>
            <input type="date" name="date_of_birth"></input>
            <label for="message-text" class="col-form-label">Gender:</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
              <label class="form-check-label" for="inlineRadio1">male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
              <label class="form-check-label" for="inlineRadio2">female</label>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Email Address:</label>
              <input type="text" name="email" placeholder=""></input>
              <label for="message-text" class="col-form-label">Contact Number:</label>
              <input type="text" name="contact_number" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Permanent Address:</label>
              <input type="text" name="per_address" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Nationality:</label>
              <input type="text" name="nationality" placeholder=""></input>
              <label for="message-text" class="col-form-label">Civil Status:</label>
              <input type="text" name="civil_status" placeholder=""></input>
              <label for="message-text" class="col-form-label">Religion:</label>
              <input type="text" name="religion" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Name of Spouse(if married):</label>
              <input type="text" name="spouse" placeholder=""></input>
              <label for="message-text" class="col-form-label">Spouse's Occupation:</label>
              <input type="text" name="spuse_occupation" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Birth Order:</label>
              <input type="number" name="birth_order" placeholder="Choose..."></input>
              <label for="message-text" class="col-form-label">No. of brother/s:</label>
              <input type="number" name="brother" placeholder="Choose..."></input>
              <label for="message-text" class="col-form-label">No. of sister/s:</label>
              <input type="number" name="sister" placeholder="Choose..."></input>
            </div>
            <label for="message-text" class="col-form-label">Living with (please choose):</label>
            <div class="div d-inline-flex text-center">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="living_with" id="flexRadioDefault1" value="Parents">
                <label class="form-check-label" for="flexRadioDefault1">
                  Parents
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input ms-1" type="radio" name="living_with" id="flexRadioDefault2" value="Guardian">
                <label class="form-check-label" for="flexRadioDefault2">
                  Guardian
                </label>
               </div>
               <div class="form-check">
                <input class="form-check-input ms-1" type="radio" name="living_with" id="flexRadioDefault3" value="Boarding House">
                <label class="form-check-label" for="flexRadioDefault3">
                  Boarding House
                </label>
              </div>
            </div>
    </div>
      <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
      <input type="button" name="next" class="next btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
  <div class="">
              <label for="message-text" class="col-form-label">Name of Father</label>
              <label for="message-text" class="col-form-label ms-5">Name of Mother</label></br>
              <input type="text" name="name_of_father" placeholder=""></input>
              <input type="text" name="name_of_mother" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_address" placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="mother_address" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_nationality" placeholder=""></input>
              <label for="message-text" class="col-form-label">Nationality:</label>
              <input type="text" name="mother_nationality" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_religion" placeholder=""></input>
              <label for="message-text" class="col-form-label">Religion:</label>
              <input type="text" name="mother_religion" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_educ" placeholder=""></input>
              <label for="message-text" class="col-form-label">Educ. Attainment:</label>
              <input type="text" name="mother_educ" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_occupation" placeholder=""></input>
              <label for="message-text" class="col-form-label">Occupation:</label>
              <input type="text" name="mother_occupation" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_company" placeholder=""></input>
              <label for="message-text" class="col-form-label">Company Name:</label>
              <input type="text" name="mother_company" placeholder=""></input>
            </div>
            <div class="div">
              <input type="date" name="father_birthdate" placeholder=""></input>
              <label for="message-text" class="col-form-label">Birthdate:</label>
              <input type="date" name="mother_birthdate" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_contact" placeholder=""></input>
              <label for="message-text" class="col-form-label">Contact Number/s:</label>
              <input type="text" name="mother_contact" placeholder=""></input>
            </div>
            <div class="div">
              <input type="text" name="father_email" placeholder=""></input>
              <label for="message-text" class="col-form-label">EmailAddress:</label>
              <input type="text" name="mother_email" placeholder=""></input>
            </div>
            <div class="pt-3">
              <label for="message-text" class="col-form-label">Name of Guardian:</label>
              <input type="text" name="name_of_gurdian" placeholder=""></input>
              <label for="message-text" class="col-form-label">Relationship:</label>
              <input type="text" name="gurdian_relationship" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="gurdian_address" placeholder=""></input>
              <label for="message-text" class="col-form-label">Contact no.:</label>
              <input type="text" name="gurdian_contact" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Email Address of Guardian:</label>
              <input type="text" name="gurdian_email" placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Person to notify in case of emergency:</label>
              <input type="text" name="emergency_person" placeholder=""></input>
              <label for="message-text" class="col-form-label">Contact no.:</label>
              <input type="text" name="emergency_contact" placeholder=""></input>
            </div>
  <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
  <input type="button" name="next" class="next btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
  <h2 class="font-monospace border-bottom border-secondary">Educational Background:</h2>
  <div class="container p-3">
        <div class="div">
        <label for="message-text" class="col-form-label pt-2">Please Select if you are:</label>
            <div class="div d-inline-flex text-center">
             <div class="form-check">
              <input class="form-check-input" type="radio" name="years" id="flexRadioDefault1" value="Freshmen">
                <label class="form-check-label" for="flexRadioDefault1">
                   Freshmen
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input ms-1" type="radio" name="years" id="flexRadioDefault2" value="Transferee">
                <label class="form-check-label" for="flexRadioDefault2">
                  Transferee
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input ms-1" type="radio" name="years" id="flexRadioDefault3" value="Second Degree">
                <label class="form-check-label" for="flexRadioDefault3">
                  Second Degree
                </label>
            </div>
          </div>
        </div>
        <h5 class="">Tertiary</h5>
          <div class=" p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" name="school_name_tertiary"placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="school_add_tertiary"placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="date" name="year_attended_tertiary"placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" name="honors_tertiary"placeholder=""></input>
            </div>
          </div>
        <h5 class="pt-3">Alternative Learning System</h5>
          <div class="p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" name="school_name_als"placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="school_add_als"placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="date" name="year_attended_als"placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" name="honors_als"placeholder=""></input>
            </div>
          </div>
        <h5 class="pt-3">Secondary</h5>
          <div class="p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" name="school_name_second"placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="school_add_second"placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="date" name="year_attended_second"placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" name="honors_second"placeholder=""></input>
            </div>
          </div>
        <h5 class="pt-3">Elementary</h5>
          <div class=" p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" name="schoo_name_elem"placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" name="school_add_elem"placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="date" name="year_attended_elem"placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" name="honors_elem"placeholder=""></input>
            </div>
          </div>
      </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="button" name="next" class="next btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
  <h2 class="font-monospace border-bottom border-secondary pt-3">Insisutional Affiliation:</h2>
      <div class="container p-3">
        <div class=" p-2">
          <div class="div">
            <label for="message-text" class="col-form-label">Name of Organization:</label>
            <input type="text" name="name_of_org"placeholder=""></input>
            <label for="message-text" class="col-form-label">Affiliation:</label>
            <input type="text" name="affilition"placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Year:</label>
            <input type="text" name="affli_year"placeholder=""></input>
            <label for="message-text" class="col-form-label">Status:</label>
            <input type="text" name="affli_status"placeholder=""></input>
          </div>
        </div>
      </div> 
      <h2 class="font-monospace border-bottom border-secondary pt-3">Work Experience:</h2>
      <div class="container">
        <div class="p-2">
          <div class="div">
            <label for="message-text" class="col-form-label">Company Name:</label>
            <input type="text" name="company_name"placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Position:</label>
            <input type="text" name="position"placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">From-To:</label>
            <input type="text" name="from_to"placeholder=""></input>
          </div>
        </div>
      </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="button" name="next" class="next btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
  <h2 class="font-monospace border-bottom border-secondary pt-3">Interest:</h2>
  <div class="container p-3 ">
        <div class="form-check">
            <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Watching TV" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Watching TV</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Reading Books" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Reading Books</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Collecting Items" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Collecting Items</label>
              </div>
          </div>
          <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Taking care of pets" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Taking care of pets</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Going out w/Friends" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Going out w/Friends</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Watching Movies" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Watching Movies</label>
              </div>
          </div>
          <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Shopping" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Shopping</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Eating" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Eating</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Hiking" name="interest[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Hiking</label>
              </div>
          </div>
        </div>
      </div>
    <h2 class="font-monospace border-bottom border-secondary pt-3">TALENTS:</h2>
    <div class="container p-3">
        <div class="form-check">
          <div class="div">
            <input class="form-check-input" type="checkbox" value="Dramatic" name="talent[]">
            <label class="form-check-label" for="flexCheckIndeterminate"> Dramatic</label>
          </div>
          <div class="div">
            <input class="form-check-input" type="checkbox" value="Singing" name="talent[]">
            <label class="form-check-label" for="flexCheckIndeterminate"> Singing</label>
          </div>
          <div class="div">
            <input class="form-check-input" type="checkbox" value="Dancing" name="talent[]">
            <label class="form-check-label" for="flexCheckIndeterminate"> Dancing</label>
          </div>
          <div class="div">
            <input class="form-check-input" type="checkbox" value="Painting" name="talent[]">
            <label class="form-check-label" for="flexCheckIndeterminate"> Painting</label>
          </div>
        </div>
      </div>
  <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
  <input type="button" name="next" class="next btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
  <h2 class="font-monospace border-bottom border-secondary pt-3">CHARACTERISTICS:</h2> <h5>(you may check more than one Characteristics.)</h5>
      <div class="container p-3">
        <div class="form-check">
        <div class="row g-0 p-2">
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Friendly" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Friendly</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Jealous" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Jealous</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Industrious" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Industrious</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Stubborn" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Stubborn</label>
              </div>
          </div>
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Patient" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Patient</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Calm" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Calm</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Confident" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Confident</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Calm" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Calm</label>
              </div>
          </div>
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Kind" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Kind</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Pessimistic" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Pessimistic</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Thoughtful" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Thoughtful</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Insecure" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Insecure</label>
              </div>
          </div>
        </div>
        <div class="row g-0 p-2">
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Humble" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Humble</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Independent" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Independent</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Studious" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Studious</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Talkative" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Talkative</label>
              </div>
          </div>
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Optimistic" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Optimistic</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Moody" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Moody</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Understanding" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Understanding</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Dommineering" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Dommineering</label>
              </div>
          </div>
          <div class="col-6 col-xl-2">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Sensitive" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Sensitive</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Responsive" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Responsive</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Selfish" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Selfish</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Spoiled" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Spoiled</label>
              </div>
          </div>
        </div>
        <div class="row g-0 p-2">
          <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Lazy" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate">Lazy</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Quiet" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Quiet</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Observant" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Observant</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="Tolerant" name="characteristic[]">
                <label class="form-check-label" for="flexCheckIndeterminate"> Tolerant</label>
              </div>
          </div>
        </div>
        </div>
      </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
  </fieldset>
  </form>

  <style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
  </style>
  <!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
</section>

<?php
  include '../body/lower.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});
</script>