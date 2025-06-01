<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="home.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link href="style.css" rel="stylesheet" />
    <!-- Corrected link for Bootstrap Icons -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
      rel="stylesheet"
    />

    <title>Home</title>
    <style>

* {
  margin: 0px;
  padding: 0px;
  scroll-behavior: smooth;
}

.nav1 {
  width: 100%;
  /* background-image:linear-gradient(to right, #251d5f,#0cc8bf);  */
  background-color: #251d5f;
}
.navbar-brand {
  color: #d4e6e7 !important;
}
.nav-link {
  color: #d4e6e7 !important;
}
.nav-link:hover {
  color: #e06263 !important;
}
.navbar-brand:hover {
  color: #e06263 !important;
}
#img1 {
  display: flex;
  width: 100%;
  height: 450px;
  background-position: center;
  background-size: cover;
  background-image: url("https://thumbs.dreamstime.com/b/children-playing-together-toddler-kid-baby-play-blocks-educational-toys-preschool-kindergarten-child-little-boys-84680323.jpg");
  background-attachment: fixed;
}
.fon {
  font-family: "Lobster", sans-serif;
  font-weight: 400;
  font-style: normal;
  text-align: center;
  color: #0cc8bf;
}
.cards {
  margin-left: 50px;
  margin-right: 0px;
  justify-content: center;
  opacity: 0;
  transform: translateY(50px); /* Initially move the cards down */
  transition: opacity 1s ease, transform 1s ease; /* Add transition for smooth reveal */
}
.card-box {
  height: 400px;
  width: 270px;
  display: inline-block;
  justify-content: space-around;
  margin: 10px;
  text-align: center;
  color: #d4e6e7;
}
#img2 {
  float: left;
  max-width: 400px;
  margin-left: 20px;
  margin-right: 15px;
}
.wrapper {
  width: 90%;
}
.text-box {
  color: #251d5f;
}
.text-box p {
  margin-left: 10px;
  justify-content: space-evenly;
  text-align: justify;
  margin-right: 8px;
}
.card2 {
  height: 600px;

  background-color: #412ce1d7;
}

.flip-container {
  perspective: 1000px;
  display: inline-block;
  justify-content: space-around;
  margin-right: 50px;
  margin-left: 10px;
}
.flip-card {
  width: 220px;
  height: 220px;
  transition: transform 1s;
  transform-style: preserve-3d;
  position: relative;
  margin-left: 30px;
  margin-bottom: 20px;
  text-align: justify;
  padding-top: 10px;
}
.flip-card:hover {
  transform: rotateY(180deg);
}

.flip-card-front,
.flip-card-back {
  width: 100%;
  height: 100%;
  position: absolute;
  backface-visibility: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  font-size: 18px;
  color: #251d5f;
  background: #aed7d9;
}
.flip-card-back {
  background-color: #aed7d9;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  transform: rotateY(180deg);
}
.flip-card-front img {
  width: 100px;
  height: 100px;
  display: flex;
  justify-content: center;
}
.container {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  padding: 20px;
}
.card3 {
  display: flex;
  justify-content: space-around;
  width: 100%;
  max-width: 1200px;
}
.card-box3 {
  width: 45%;
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin: 10px;
  padding: 10px;
  box-sizing: border-box;
}
.card-box3 h1 {
  margin-top: 0;
  color: #333333;
}
.card-box3 p,
.card-box3 ul {
  margin-bottom: 20px;
}
.card-box3 ul {
  padding-left: 20px;
}
.card-box3 ul li {
  list-style-type: disc;
  margin-bottom: 5px;
}

.card-box3 input[type="text"],
.card-box3 input[type="email"],
.card-box3 input[type="tel"],
.card-box3 textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #dddddd;
  border-radius: 5px;
  box-sizing: border-box;
  font-size: 16px;
}
.card-box3 textarea {
  resize: vertical;
  height: 100px;
}
.card-box3 button {
  background-color: #007bff;
  color: #ffffff;
  border: none;
  padding: 12px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  margin-left: 40%;
  transition: background-color 0.3s;
}
.card-box3 button:hover {
  background-color: #0056b3;
}
#copyright {
  margin-top: 15px;
}
.footer {
  background-color: #251d5f;
  color: #ffffff;
  padding: 20px 0;
  text-align: center;
  position: relative;
  bottom: 0;
  width: 100%;
}
.footer a {
  color: #ffffff;
  text-decoration: none;
  margin: 0 10px;
}
.footer a:hover {
  color: #e06263 !important;
}

    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg nav1">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Nalanda</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="ourpages\About.html"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="ourpages\Admission.html"
                >Admission</a
              >
            </li>
           
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="ourpages\gallary.html"
                >Gallary</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="#contact_form">Contact Us</a
              >
            </li>
           
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="admin/login.php"
                >Admin</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="user/login.php"
                >Student</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end of nav -->
    <div>
      <div id="img1"></div>
      <br />
      <h1 class="fon">Fun Creates learning</h1>

      <hr />

      <div class="cards">
        <div class="card-box" style="background-color: #e06263">
          <br />
          <h3>SPEAK-O-KIT</h3>
          Speak-o-kit, more commonly known as, a set of talking books & talking
          pen is a learning tool which was introduced for the very first time by
          Nalanda. It aims to inculcate self reliance, self learning & greater
          retention power amongst students. It is 100% mapped with the school
          curriculum.
        </div>
        <div class="card-box" style="background-color: #794f37">
          <br />
          <h3>ROBOTIME</h3>
          <p>
            Robotics develops critical thinking & moreover it's a favorite
            activity for kids at Nalanda. It polishes a child's thinking skills
            & parents are sure to observe how brilliantly their child learns to
            assemble blocks in the Robotime Kit. Level wise kits are specialized
            as per child's learning needs.
          </p>
        </div>
        <div class="card-box" style="background-color: #e06263">
          <br />
          <h3>SMART CLASSES</h3>
          Smart Classes are must for new age education wherein children should
          know how to understand concepts through learning tools. It is
          important that a teacher portrays the academic content on-screen which
          w ill awaken all their senses to domains of new learning experience.
        </div>
        <div class="card-box" style="background-color: #794f37">
          <h3>VIRTUAL REALITY</h3>
          At Nalanda, children under the age group of 2 to 5 years learn through
          live examples, virtually. This is enchanting indeed! Traveling to
          places sitting in a classroom is possible with the VR head gears. The
          3D viewing & the practicality associated to theoretical places make
          concepts easy to understand.
        </div>
      </div>
      <h1 class="fon">Nalanda Play School</h1>
      <hr />
      <!-- End of cards -->

      <div>
        <div class="wrapper">
          <img
            id="img2"
            src="https://st.depositphotos.com/1000137/2646/i/450/depositphotos_26460023-stock-photo-group-of-cute-little-prescool.jpg"
          />
          <div class="text-box">
            <p>
              <br />
              Starting from 2004, Nalanda has completed almost 19 years of
              successful years in education segment and have over 1200 operating
              play schools across India. From Kashmir in the north to
              Kanyakumari in the south Nalanda have established branches in
              Nepal and Bangladesh. Nalanda: A place where eminence in learning
              is felt. The amazing part of this kind of learning is that this
              power and fun in learning is felt both by parents and the kids.
              They foresee a Nalanda which is not just in learning numbers and
              alphabets but far beyond that. Technology which has seeped deep in
              the Nalandaites is a gift which will be cherished for long. Why
              not moms and dads wouldn’t want to join a preschool and live
              childhood, THE Nalanda WAY!
            </p>
          </div>
        </div>
      </div>
    </div>
    <br />
    <br />
    <!-- satrting of flip cards -->
    <div class="card2">
      <br />
      <h2 style="text-align: center; color: aliceblue">
        Nalanda Play School Value Chain
      </h2>
      <br />
      <div class="flip-container">
        <div class="flip-card">
          <div class="flip-card-front">
            <img
              src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQJjRpDcJODf1RwLGrqi4oAoGngK9DFw6kR0J18sM_kkxHccJZr"
            />
            Health Checkup
          </div>
          <div class="flip-card-back">
            We organize regular health check-up camps for providing a healthy
            playschool environment to the little ones.
          </div>
        </div>
      </div>

      <div class="flip-container">
        <div class="flip-card">
          <div class="flip-card-front">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP-EymLZHiaDMv_NRc2HZdUFl8yJzV5VtTc6t1lWD5hEE0MFjm"
            />
            Montessori toys
          </div>
          <div class="flip-card-back">
            Our curriculum includes learning through Montessori toys, to develop
            the fine motor skills in a child.
          </div>
        </div>
      </div>

      <div class="flip-container">
        <div class="flip-card">
          <div class="flip-card-front">
            <img
              src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRL69qcOra5LLVW4D-X3BUKdG_5ldhCkqVfER6mTLpO8A27m4Oq"
            />
            Modular furniture
          </div>
          <div class="flip-card-back">
            Use of German-enabled technology helps us to create the masterpieces
            of modular furniture for our preschools.
          </div>
        </div>
      </div>

      <div class="flip-container">
        <div class="flip-card">
          <div class="flip-card-front">
            <img
              src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcR7q4LOotSWZJMVb_mER7Ugt2rAlPOWUQHG9hK0of1g-rc5dCKh"
            />
            Play Way Methods
          </div>
          <div class="flip-card-back">
            We focus on developing a child holistically using play-way methods
            and do not enforce learning through books only.
          </div>
        </div>
      </div>
      <br />
      <div class="flip-container">
        <div class="flip-card">
          <div class="flip-card-front">
            <img
              src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQwnNJKsyPrsTO3ktJ_6x-EEmN0ljXcoieAv3AGTrFKNCEF79x2"
            />
            After School Fun
          </div>
          <div class="flip-card-back">
            Our programs such as Saturday Club and Activity Junction helps in
            engaging children in the after-school liveliness.
          </div>
        </div>
      </div>

      <div class="flip-container">
        <div class="flip-card">
          <div class="flip-card-front">
            <img
              src="https://www.svgrepo.com/show/416996/clean-hand-handwashing.svg"
            />
            prioritizing Hygiene
          </div>
          <div class="flip-card-back">
            We worship the place of learning and thus, maintaining hygiene
            around the school is always on our priority list.
          </div>
        </div>
      </div>

      <div class="flip-container">
        <div class="flip-card">
          <div class="flip-card-front">
            <img
              src="https://img.freepik.com/premium-vector/toy-blocks-children-isolated-flat-vector-illustration_687327-564.jpg?w=740"
            />
            Teaching Aids
          </div>
          <div class="flip-card-back">
            Our specialized teaching aids help in imparting the lessons with
            efficiency and effectiveness for better retention.
          </div>
        </div>
      </div>

      <div class="flip-container">
        <div class="flip-card">
          <div class="flip-card-front">
            <img
              src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR8eND1TvyV8jeZD7v_V0sVi-Fvf-P7GGg3LOkhNTurBQ8wkwtD"
            />
            Nalanda Academy
          </div>
          <div class="flip-card-back">
            Nalanda Academy is running NTT courses for teachers looking forward
            joining tiny tots by profession.
          </div>
        </div>
      </div>
    </div>

    <!-- end of flipcards -->
    <div class="container">
      <div class="card3">
        <div class="card-box3">
          <h1>About Nalanda Play School</h1>
          <p>
            Nalanda play school instils a spirit of joy and fervour in children
            for learning new things and outshine in the competitive world. Being
            one of the most renowned nursery schools, Nalanda has all that a
            growing toddler needs to complete his early education!
          </p>
          <ul>
            <li>Unique teaching methodologies</li>
            <li>Technical pre school curriculum</li>
            <li>Fosters holistic development</li>
            <li>Creative in-house pedagogy</li>
          </ul>
          <br /><br />
          <div>
            <ul>
              <li>Apply for admission</li>
              <li>Admission process</li>
              <li>Admission FAQ</li>
              <li>Programs</li>
              <li>About us</li>
              <li>Contact us</li>
              <li>Careers</li>
            </ul>
          </div>
        </div>

        <div class="card-box3">
          <h1>Contact Form</h1>
          <form
            id="contact_form"
            action="home.php"
            name="contact_form"
            method="post"
          >
            <div class="mb-5">
              <label for="first_name">First Name</label>
              <input
                type="text"
                required
                maxlength="50"
                id="first_name"
                name="first_name"
                placeholder="Enter First Name"
              />
            </div>
            <div class="mb-5">
              <label for="last_name">Last Name</label>
              <input
                type="text"
                required
                maxlength="50"
                id="last_name"
                name="last_name"
                placeholder="Enter Last Name"
              />
            </div>
            <div class="mb-5">
              <label for="email_addr">Email address</label>
              <input
                type="email"
                required
                maxlength="50"
                id="email_addr"
                name="email_addr"
                placeholder="name@example.com"
              />
            </div>
            <div class="mb-5">
              <label for="phone_input">Phone</label>
              <input
                type="tel"
                required
                maxlength="50"
                id="phone_input"
                name="phone_input"
                placeholder="Phone"
              />
            </div>
            <div class="mb-5">
              <label for="message">Message</label>
              <textarea
                id="message"
                name="message"
                rows="5"
                placeholder="Message here..."
              ></textarea>
            </div>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <!-- footer -->
    <div class="footer">
      <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
      <a href="https://www.twitter.com/"><i class="bi bi-twitter"></i></a>
      <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
      <a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
      <p id="copyright">&copy; 2024 Rushikesh. All Rights Reserved.</p>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var cards = document.querySelector(".cards");
        var observer = new IntersectionObserver(
          function (entries) {
            if (entries[0].isIntersecting) {
              cards.style.opacity = 1;
              cards.style.transform = "translateY(0)";
            }
          },
          { threshold: 0.5 }
        ); // Trigger animation when 50% of the element is visible
        observer.observe(cards);
      });
    </script>
  </body>
</html>
