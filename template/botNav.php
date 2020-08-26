<footer class="page-footer  grey darken-3">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Our Location</h5>
                Call Us At:<br>
                (408) 253-8424<br>
                amarinthai.cuisine@gmail.com
                <p class="grey-text text-lighten-4">
                    <iframe title="Amarin Thai Location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471.8326522275676!2d-121.99248332099643!3d37.29278537589865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb5559167bb75%3A0x359596cecb4abebc!2sAmarin+Thai+Cuisine!5e0!3m2!1sen!2sus!4v1512267648897" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </p>
            </div>
            <div class="col l6 s12">
                <h5 class="white-text">Service Hours</h5>
                <table class="">
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>Lunch</th>
                            <th>Dinner</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Mon - Thur</td>
                            <td>11:30 AM - 3 PM</td>
                            <td>5 - 8:30 PM</td>
                        </tr>
                        <tr>
                            <td>Fri</td>
                            <td>11:30 AM - 3 PM</td>
                            <td>5 - 9 PM</td>
                        </tr>
                        <tr>
                            <td>Sat</td>
                            <td>12 - 3 PM</td>
                            <td>5 - 9 PM</td>
                        </tr>
                        <tr>
                            <td>Sun</td>
                            <td>12 - 3 PM</td>
                            <td>5 - 8:30 PM</td>
                        </tr>
                    </tbody>
                </table>
                <p>*Opens 7 days a week, closes between 3-5PM</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2015 Amarin Thai Cuisine (Prospect Rd. San Jose, CA). All Rights Reserved. : Developed by Give Me A Job
        </div>
    </div>
</footer>
</body>
</html>
<!-- cdnjs -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.plugins.min.js"></script>

<script>
    $(function() {
        $('.lazy').Lazy();
    });

    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('./sw.js');
        });
    }
    Materialize.toast('Amarin Thai will only be accepting orders for pickup. <br> Our lunch hours are normal <br> We will close at around 8 to 8:30PM for dinner', 20000000);
</script>
