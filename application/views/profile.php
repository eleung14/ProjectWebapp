<div>
    <div id="profile-pic-text"><!-- The div that handles the profile pic and text underneath -->

        <!--The Profile Pic -->
        <div id="profile-pic">
            {profile_pic}
        </div>
        <!-- End profile pic div -->


        <div id="profile-info"> <!-- The text section underneath profile pic -->

            <strong>Username: </strong>{username}
            <br/>
            <strong>E-mail: </strong>{email} 
        </div><!-- END -- The text section underneath profile pic -->
    </div><!-- END -- The div that handles the profile pic and text underneath -->
    
    <!-- Right side of profile page -->
    <div id="profile-right">

    <a href="/Account/show_posts/{username}"> Click here to get all {username}'s posts </a>
    {edit}  
    {delete}
    <p> Upload Avatar:</p>
    {multi_part_upload}

    <input type="file" name="userfile" size="20" />

    <br /><br />

    <input type="submit" value="upload" />

    </div>

</div>
