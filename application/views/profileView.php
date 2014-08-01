<script type="text/javascript">
    var userID = "<?php echo $userID;?>";
</script>

<!-- Fix for old browsers -->
<script src="http://nervgh.github.io/js/es5-shim.min.js"></script>
<script src="http://nervgh.github.io/js/es5-sham.min.js"></script>
<script type="text/javascript" src="<?php echo WEBSITE_URL?>public/js/angular.min.js"></script>

<!--<script src="../bower_components/angular/angular.js"></script>-->
<script src="<?php echo WEBSITE_URL ?>public/js/fileupload/angular-file-upload.js"></script>


<div ng-app="profile">
    <div class="container" ng-controller="profileCtrl">
    <form name="profileForm" ng-submit="submitprofile(user)" novalidate>
        <div class="col-md-8 float-center">
            <h2>User profile</h2>
                <div class="clearfix">
                    <label> User Name</label>
                    <input type="text" name="username" class="form-control input-sm" placeholder="Enter name"
                           ng-model="user.name" required>
                    <div ng-show="profileForm.username.$dirty && profileForm.username.$invalid">
                        <div class="text-danger text-center" ng-show="profileForm.username.$error.required"> Please enter your name</div>
                    </div>
                </div>
                <div class="clearfix">
                    <label> Email</label>
                    <input type="email" name="email" class="form-control input-sm" placeholder="Enter email"
                           ng-model="user.email" required>
                    <div ng-show="profileForm.email.$dirty && profileForm.email.$invalid">
                        <div class="text-danger text-center" ng-show="profileForm.email.$error.required || profileForm.email.$error.email">Please enter valid email</div>
                    </div>
                </div>
                <div class="clearfix">
                    <label> Phone num</label>
                    <input type="text" name="phone" class="form-control input-sm" placeholder="Phone number"
                           ng-model="user.phone" required>
                    <div ng-show="profileForm.phone.$dirty && profileForm.phone.$invalid">
                        <div class="text-danger text-center" ng-show="profileForm.phone.$error.required"> Please enter phone number</div>
                    </div>
                </div>
                <div class="clearfix">
                    <label> Address</label>
                    <input type="text" name="address" class="form-control input-sm" placeholder="Address"
                           ng-model="user.address" required>
                    <div ng-show="profileForm.address.$dirty && profileForm.address.$invalid">
                        <div class="text-danger text-center" ng-show="profileForm.address.$error.required"> Please enter address</div>
                    </div>
                </div>
                <div class="clearfix">
                    <label> Image</label>
                    <div class="">
                        <a class="thumbnail">
                            <img ng-src="{{userPhoto}}">
                        </a>
                    </div>
                    <div class="clearfix">
                        change
                        <input type="file" nv-file-select="" uploader="uploader" >
                    </div>

                </div>
                <div ng-show="response.error">
                    {{response.text}}
                </div>
                <div class="clearfix">
                    <button type="submit" class="btn btn-primary"
                            ng-disabled="profileForm.$invalid || isChanged(user)">Update</button>
                    <!--button type="reset" class="btn btn-default">Reset</button-->
                </div>

        </div>
    </form>
</div>
</div>
<script type="text/javascript" src="<?php echo WEBSITE_URL?>public/js/profile.js"></script>