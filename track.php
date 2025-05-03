<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pyramind</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>Pyramind</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="track.php" class="nav-item nav-link active">Tracks</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="detail.php" class="dropdown-item">Tracks Detail</a>
                            <a href="feature.php" class="dropdown-item">Our Features</a>
                            <a href="team.php" class="dropdown-item">Instructors</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="register_user.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Join Us</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Tracks</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Tracks</p>
            </div>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group">
                        <!-- In your Header section --> <div class="mx-auto mb-5" style="width: 100%; max-width: 600px; position: relative;"> <div class="input-group"> <input type="text" id="courseSearch" class="form-control border-light" style="padding: 25px;" placeholder="Search courses, instructors, subjects..." aria-label="Search courses"> <div class="input-group-append"> <button class="btn btn-primary px-4" type="button" onclick="searchCourses()"> <i class="fa fa-search"></i> </button> </div> </div> <div id="searchResults" class="bg-white shadow-lg rounded" style="position: absolute; width: 100%; z-index: 1000; display: none; max-height: 400px; overflow-y: auto;"> <!-- Results will appear here --> </div> </div>
                        
                    </div>
                    <div class="input-group-append">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center position-relative mb-5">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Tracks</h6>
                        <h1 class="display-4">Checkout New Releases Of Our Tracks</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.php">
                        <img class="img-fluid" src="img/courses-1.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design & development Tracks for
                                beginners</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Amir krara</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.php">
                        <img class="img-fluid" src="img/courses-2.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Accounting</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Mahmoud alkhateeb</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.7
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.php">
                        <img class="img-fluid" src="img/courses-3.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Marketing</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Ayman Hefny</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.6
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.php">
                        <img class="img-fluid" src="img/courses-4.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">CEO</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Haidy</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.php">
                        <img class="img-fluid" src="img/courses-5.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Data Anaylsis</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Elsayed Hamdy</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.4
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.php">
                        <img class="img-fluid" src="img/courses-6.jpg" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">English</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Amany Elnahas</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.9
                                        <small>(250)</small></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                         
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Footer Start -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book-reader mr-3"></i>Pyramind</h1>
                    </a>
                    <p class="m-0">About Pyramind – Your First Choice for Online Education
                    At Pyramind, we believe that learning should be accessible, flexible, and transformative. As a leading online education platform, we empower students, professionals, and lifelong learners worldwide with high-quality courses designed to help them achieve their personal and career goals.</p>
                </div>
                <div class="col-md-6 mb-5">
                    <h3 class="text-white mb-4">Newsletter</h3>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white" href="#"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Our Tracks</h3>
                    <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Web design & development Tracks for
                                    beginners</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>CEO</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketing</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Accounting</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>System Anaylsis</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>English</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms & Condition</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Regular FAQs</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help & Support</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">Pyramind</a>. All Rights Reserved.
                    </p>
                </div>
               
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
// Sample course data - in a real app, this would come from your backend
const coursesData = [
    {
        id: 1,
        title: "Web Design & Development for Beginners",
        instructor: "Amir krara",
        rating: 4.5,
        reviews: 250,
        image: "img/courses-1.jpg",
        description: "Learn the fundamentals of web design and development."
    },
    {
        id: 2,
        title: "Accounting",
        instructor: "Mahmoud alkhateeb",
        rating: 4.7,
        reviews: 180,
        image: "img/courses-2.jpg",
        description: "These courses turned my confusion into confidence—now I handle balance sheets like a pro!"
    },
    {
        id: 3,
        title: "Marketing",
        instructor: "Ayman Hefny",
        rating: 4.6,
        reviews: 180,
        image: "img/courses-2.jpg",
        description: "From clueless to campaign-ready! The lessons gave me the strategies to boost real brands."
    },
    {
        id: 4,
        title: "CEO",
        instructor: "Haidy",
        rating: 4.5,
        reviews: 180,
        image: "img/courses-2.jpg",
        description: "The leadership frameworks transformed my mindset—I launched my startup within a year."
    },
    {
        id: 5,
        title: "Data Anaylsis",
        instructor: "Elsayed Hamdy",
        rating: 4.4,
        reviews: 180,
        image: "img/courses-2.jpg",
        description: "Python, SQL, dashboards—I mastered it all. Now I turn raw data into raises at work."
    },
    {
        id: 6,
        title: "English",
        instructor: "Amany Elnahas",
        rating: 4.9,
        reviews: 180,
        image: "img/courses-2.jpg",
        description: "Fluency unlocked! The immersive lessons made me speak naturally, even in job interviews."
    },
];
 
// Search function
function searchCourses() {
    const searchTerm = document.getElementById('courseSearch').value.toLowerCase().trim();
    const resultsContainer = document.getElementById('searchResults');
    // Clear previous results
    resultsContainer.innerHTML = '';
    if (searchTerm === '') {
        resultsContainer.style.display = 'none';
        resetAllCourses();
        return;
    }
    // Filter courses
    const results = coursesData.filter(course => 
        course.title.toLowerCase().includes(searchTerm) ||
        course.instructor.toLowerCase().includes(searchTerm) ||
        course.description.toLowerCase().includes(searchTerm)
    );
    // Display results
    if (results.length > 0) {
        results.forEach(course => {
            const resultItem = document.createElement('div');
            resultItem.className = 'p-3 border-bottom';
            resultItem.innerHTML = `
<div class="d-flex">
<img src="${course.image}" alt="${course.title}" 
                         style="width: 60px; height: 60px; object-fit: cover;">
<div class="ml-3">
<h6 class="mb-1">${course.title}</h6>
<small class="text-muted">${course.instructor} • ${course.rating} 
<i class="fa fa-star text-warning"></i> (${course.reviews})</small>
</div>
</div>
            `;
            resultItem.addEventListener('click', () => {
                window.location.href = `detail.html?id=${course.id}`;
            });
            resultItem.style.cursor = 'pointer';
            resultsContainer.appendChild(resultItem);
        });
        resultsContainer.style.display = 'block';
    } else {
        resultsContainer.innerHTML = '<div class="p-3 text-center">No courses found</div>';
        resultsContainer.style.display = 'block';
    }
    // Highlight matching courses in carousel
    highlightMatchingCourses(searchTerm);
}
 
// Highlight matching courses
function highlightMatchingCourses(searchTerm) {
    const courses = document.querySelectorAll('.courses-item');
    courses.forEach(course => {
        const title = course.querySelector('h4').textContent.toLowerCase();
        const instructor = course.querySelector('span:first-child').textContent.toLowerCase();
        if (searchTerm === '' || title.includes(searchTerm) || instructor.includes(searchTerm)) {
            course.style.display = 'block';
            course.style.opacity = '1';
        } else {
            course.style.opacity = '0.5';
        }
    });
}
 
// Reset all courses to visible
function resetAllCourses() {
    const courses = document.querySelectorAll('.courses-item');
    courses.forEach(course => {
        course.style.display = 'block';
        course.style.opacity = '1';
    });
}
 
// Event listeners
document.getElementById('courseSearch').addEventListener('input', function() {
    searchCourses();
});
 
document.addEventListener('click', function(e) {
    if (!e.target.closest('#courseSearch') && !e.target.closest('#searchResults')) {
        document.getElementById('searchResults').style.display = 'none';
    }
});
</script>
</body>

</html>