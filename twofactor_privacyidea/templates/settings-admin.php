<?php
script('twofactor_privacyidea', 'settings-admin');
?>

<div class="section" id="privacyIDEA">
    <h2><?php p($l->t('privacyIDEA 2FA')); ?></h2>
    <a target="_blank" rel="noreferrer" class="icon-info svg"
       title="<?php p($l->t('Open documentation')); ?>"
       href="http://privacyidea.readthedocs.io"></a>
    <p>
        <em>In a second step of authentication the user is asked to provide a one
            time password. The users devices are managed in privacyIDEA. The
            authentication request is forwarded to privacyIDEA.
        </em>
    </p>
    <div id="piSettings">
        <p>
            <input id="piactive" type="checkbox" class="checkbox">
            <label for="piactive">Activate two factor authentication with privacyIDEA.</label>
            <em>Before activating two factor authentication with privacyIDEA, please asure, that the connection to
                your privacyIDEA-server is configured correctly.</em>
        </p>
        <p>
            <label for="piurl">URL of the privacyIDEA Server</label>
            <input type="text" id="piurl" width="300px"/>
            <em>
                Please use the base URL of your privacyIDEA instance.
                For compatibility reasons, you may also specify the URL of the /validate/check endpoint.
            </em>
        </p>

        <p>
            <input id="checkssl" type="checkbox" class="checkbox">
            <label for="checkssl">
                Verify the SSL certificate.
                Do not uncheck this in productive environments!
            </label>
        </p>

        <p>
            <input id="noproxy" type="checkbox" class="checkbox">
            <label for="noproxy">
                Ignore the system wide proxy settings and send authentication
                requests to privacyIDEA directly.
            </label>
        </p>

        <p>
            <label for="pirealm">User Realm in privacyIDEA (other than default)</label>
            <input type="text" id="pirealm" size="40"/>
        </p>

        <p>
            <input id="triggerchallenges" type="checkbox" class="checkbox">
            <label for="triggerchallenges">
                Trigger challenges for challenge-response tokens. Check this if you employ, e.g., SMS or E-Mail tokens.
            </label>
            <div id="piserviceaccount_credentials">
        <p>
            <label for="piserviceaccount_user">Username of privacyIDEA service account</label>
            <input id="piserviceaccount_user" type="text" size="40"/>
        </p>
        <p>
            <label for="piserviceaccount_password">Password of privacyIDEA service account</label>
            <input id="piserviceaccount_password" type="password" size="40"/>
        </p>
    </div>
</div>
