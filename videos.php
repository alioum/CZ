<!DOCTYPE html>
<html lang="en"><head>
        <title>Coach Zbra - Vidéos</title>
        <meta content="" name="description">
        <meta content="Coach Zbra" name="author">
        <?php include './head.html'; ?>
        <script src="http://code.jquery.com/jquery-1.7.min.js"></script>
        <script src="./youmax-master/js/youmax.js"></script>
        <link rel="stylesheet" href="./youmax-master/css/youmax.css"/>
    </head>
    <!-- NAVBAR
    ================================================== -->
    <body>
        <?php include 'header.html'; ?>	



        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container">


            <div id="youmax">
                <script type="text/javascript">

                    //clef API
                    //CZ: AIzaSyDZX2DLhYwiaEB3eFODZDMd4LnrdrFhmrM
                    //Youmaz: AIzaSyCvcRe4dX3rWAQGhz9TFSoqWNcurrspe0A
                    $('#youmax').youmax({
                        apiKey: 'AIzaSyDZX2DLhYwiaEB3eFODZDMd4LnrdrFhmrM',
                        youTubeChannelURL: "https://www.youtube.com/channel/UC0VySOL8EkTRnoOKk8oPEeQ",
                        youTubePlaylistURL: "https://www.youtube.com/playlist?list=PLicmr5KYSDcxN0z7wuNZdAMUUITqDCAEI",
                        youmaxDefaultTab: "UPLOADS", //can be UPLOADS or PLAYLISTS or FEATURED
                        youmaxColumns: 3,
                        showVideoInLightbox: false,
                        maxResults: 15,
                    });
                </script>
            </div>
        </div>
        <div class="container">
            <!-- FOOTER -->
            <?php include 'footer.html'; ?>
        </div>
    </body>
</html>