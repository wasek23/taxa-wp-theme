<!-- Customize Global Variable -->
<?php global $taxa; ?>

<div id="map" style="height: 420px; margin-bottom: 80px;"></div>

<script>
    var map;
    function initMap() {
        // New Map
        map = new google.maps.Map(document.getElementById('map'), {
            center: {<?php echo $taxa['map_center']; ?>},
            zoom: <?php echo $taxa['map_zoom']; ?>
        });
        
        // Add Marker Function
        function addMarker(props){
            var marker = new google.maps.Marker({
                position: props.coords,
                map: map
            });
            
            // Custom Icon Check
            if(props.iconImg){
                marker.setIcon(props.iconImg);
            }
            
            // Info Window Check
            if(props.content){
                var infoWindow = new google.maps.InfoWindow({
                    content: props.content
                });
                
                marker.addListener('click', function(){
                    infoWindow.open(map, marker);
                });
            }
        }
        

        <?php
            $i = 0;

            if(is_array($taxa['map_marker'])){
                foreach($taxa['map_marker'] as $marker_single_item){
                    $i++;
        ?>
                    addMarker({
                        coords: {<?php echo $marker_single_item['title']; ?>},
                        iconImg: '<?php echo $marker_single_item['url']; ?>',
                        content: '<span style="font-size: 20px;"><?php echo $marker_single_item['description']; ?></span>'
                    });

        <?php
                }
            }
        ?>        
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $taxa['google_map_api']; ?>&callback=initMap" async defer></script>