 <body>
    <div class="blog-content">
        <div class="container">
            <div class="wrapper">
                <div class="contact">
                    <h3>Bog`lanish</h3>
                    <div class="section group">
                        <div class="col span_1_of_2">
                            <div class="company_address">
                                <h2>Admin Manzili</h2>
                                <p>Bobojonov Muxtorjon</p>
                                <p>1998-07-22 Xorazm Hazorasp</p>
                                <p>Uzbekistan</p>
                                <p>+998943107230</p>
                                <p>Email: <a href="mukhtorbabadjanov@gmail.com">mukhtorbabadjanov@gmail.com</a></p>
                            </div>
                            <div class="clearfix"></div>
                            </div>
                            <div class="col span_2_of_4">
                                <div class="contact-form">
                                    <h2 class="style">Biz bilan bog'lanish</h2>
                                    <?php if ($data['alert'] == 'success'): ?>
                                <div class="alert alert-success">
                                        <i class="glyphicon glyphicon-ok-circle"></i> Xabar qabul qilindi!
                                    </div>
                                <?php endif; ?>

                                <?php if ($data['alert'] == 'error'): ?>
                                <div class="alert alert-danger">
                                        <i class="glyphicon glyphicon-remove-circle"></i> Xatolik yuz berdi!
                                    </div>
                                <?php endif; ?>
                                <form method="post">
                                    <div>
                                        <span><label>Name</label></span>
                                        <span><input name="userName" type="text" class="textbox"></span>
                                    </div>
                                    <div>
                                        <span><label>E-Mali</label></span>
                                        <span><input name="userEmail" type="text" class="textbox"></span>
                                    </div>
                                    <div>
                                        <span><label>Mobile</label></span>
                                        <span><input name="userPhone" type="text" class="textbox"></span>
                                    </div>
                                    <div>
                                        <span><label>habar</label></span>
                                        <span><input name="Subject" type="text" class="textbox"></span>
                                    </div>
                                    <div>
                                        <span><label>Subject</label></span>
                                        <span><textarea name="userMsg"> </textarea></span>
                                    </div>
                                    <div>
                                        <button class="btn-primary" style=" height:50px;width: 200px; border-radius: 5px" type="submit" value="Send"><h3>Submit me</h3></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- content-section-ends -->

    </body>
</html>