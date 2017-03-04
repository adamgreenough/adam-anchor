<?php theme_include('header'); ?>


<link rel="stylesheet" href="<?php echo theme_url('/assets/tenerife-2016/tenerife-2016.css'); ?>">
<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,700" rel="stylesheet">
<script src="<?php echo theme_url('/assets/tenerife-2016/jquery.collagePlus.js');?>"></script>

<div id="map"></div>
    <script>

      // This example creates a 2-pixel-wide red polyline showing the path of William
      // Kingsford Smith's first trans-Pacific flight between Oakland, CA, and
      // Brisbane, Australia.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 3,
          center: {lat: 42, lng: 0},
          scrollwheel: false,
          mapTypeId: 'terrain'
        });

        var flightPlanCoordinates = [
          {lat: 51.8860, lng: -0.2389},
          {lat: 28.0302, lng: -16.5986}
        ];
        var flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: '#0096d4',
          strokeOpacity: 1.0,
          strokeWeight: 3
        });



        flightPath.setMap(map);
        
        var image = { url: '<?php echo theme_url('/assets/tenerife-2016/img/pin.png'); ?>', size: new google.maps.Size(40, 40),   origin: new google.maps.Point(0, 0),
  anchor: new google.maps.Point(20, 37),
  scaledSize: new google.maps.Size(40, 40)};
        
        		  var marker = new google.maps.Marker({
		  position: {lat: 51.8860, lng: -0.2389},
		  map: map,
		  title: 'Stansted Airport',
		  icon: image
  });
  
          		  var marker = new google.maps.Marker({
		  position: {lat: 28.0302, lng: -16.5986},
		  map: map,
		  title: 'Sandos San Blas',
		  icon: image
  });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArd0L7aIiaiYrox4inyJGZ9qEBmBkch5s&callback=initMap">
    </script>

<section class="content default-page convert-emoji">
	<div class="row">
		<div class="columns large-10 large-offset-1">
			<div class="columns large-9 medium-9 small-12">
			<h1>Tenerife, 2016</h1>
			<p>In November 2016, Sasha & I travelled to Tenerife, the largest of the volcanic Canary Islands, for a short break from the cold and the drizzle.</p>
			<p>We stayed in the beautiful <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> Sandos San Blas nature resort, an eco-friendly seafront destination set in the heart of an expansive private nature reserve.
			</p>
			</div>
			<div class="columns large-3 medium-3 small-12">
				<img src="<?php echo theme_url('/assets/tenerife-2016/img/weather.png'); ?>">
			</div>
		</div>
		
		<div class="columns large-12">
			<div class="collage1">
				<img src="<?php echo theme_url('/assets/tenerife-2016/img/2.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/14.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/8.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/9.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/5.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/17.jpg'); ?>" />
    		</div>
		</div>
		
		<div class="columns large-10 large-offset-1">
			<p>Tenerife is an active volcanic island, formed by successive eruptions of the Teide volcano. As a result, the landscape is rugged & rocky and the beaches covered with the islands characteristic black pebbles & sand.</p>
			<p>Teide volcano, the third-largest volcano in the world, is visible from most parts of the island. It was a stunning backdrop in dramatic contrast to the calm, uninterrupted Atlantic. It has not erupted since 1909, but a violent eruption is predicted in the future.</p>
			<p>From around 1000 BC, the island was inhabited by natives called Guanches. To them, Tiede was a sacred mountain, as they believed that Teide held up the sky. Many hiding places found in the mountains contain the remains of stone tools and pottery seen as being ritual deposits to counter the influence of evil spirits.</p>
			<p>In more recent history, Tenerife was the last of the Canaries to be conquered by the Spanish in 1496 and in 1987 the British invasion of Tenerife resulted in Admiral Nelson, who launched the attack, being severely wounded resulting in the amputation of most of his right arm.</p>
			<p>The San Blas resort showcased a number of ancient artifacts and also had a museum about the islands rich history.</p> 
				
		</div>
		
		
		<div class="columns large-12">
			<div class="collage1">
		        <img src="<?php echo theme_url('/assets/tenerife-2016/img/19.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/3.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/16.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/4.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/6.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/12.jpg'); ?>" />
    		</div>
		</div>
		
		<div class="columns large-10 large-offset-1">
			
							<p>When choosing a holiday, Sandos San Blas stood out to us as something unique. Suckers for a good view, all-inclusive food & cocktails and a chance to explore, it seemed to tick all the boxes.  San Blas did not disappoint, the weather was as good as we could of asked for November and the resort was a peaceful, tranquil medley of luxury and nature.</p>
			<p>To experience the nature reserve, we opted for bike hire. The reserve contains a number of trails with information about the local flora & fauna along the way. In hindsight, walking would probably have been best, as we abandoned the bikes to get to many of the view points. Access to this area was a great bonus and well worth exploring.</p>
			<p>We also took advantage of the resorts shuttle bus in to the closest town, Playa de las Américas, chocked full of life with a bustling high street of bars, restaurants and activities. We enjoyed our time here, played a round of mini golf and indulged in some local food. The shopping did leave something to be desired, with most shops being frustrating tourist trap tat shops.</p>
		</div>
		
				<div class="columns large-12">
			<div class="collage1">
		        <img src="<?php echo theme_url('/assets/tenerife-2016/img/1.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/18.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/11.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/7.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/15.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/13.jpg'); ?>" /><img src="<?php echo theme_url('/assets/tenerife-2016/img/10.jpg'); ?>" />
    		</div>
		</div>
		
				<div class="columns large-10 large-offset-1">
							<div class="stamp"></div>
							<p>We thoroughly enjoyed our time in Tenerife. I would love to visit again, perhaps next time to the north of the island where there is a lot more activities and a cable car to the volcano. We opted for the south of the island this time, as it was more protected from the November weather.</p>
							<p>I can not fault Sandos San Blas and fully intend to visit other resorts under the Sandos brand. The accomodation, food, service and overall ambience was excellent (although it is hard to go wrong with on-tap cocktails and slush puppies :tropical_drink:). Possibly if we visited during on-season it could get quite busy and the close proximity to the airport could be a noise concern, though neither of these were a problem during our trip.</p>
							
							<p>Sasha insists it is her turn to pick the destination next, she has an unfortunate tendency to pick cold places. I'll work on that. <span class="end-mark">⬣</span></p>

							

		</div>
		
	</div>
</section>


<script>
	jQuery( window ).on( "load", function() {
	jQuery('.collage1').collagePlus({
            'targetHeight'    : 400,
            'fadeSpeed'       : 'fast',
            'effect'          : 'default',
            'direction'       : 'horizontal'
        }); 
    });
</script>

<?php if(comments_open()): ?>
	<section class="comments">
		<div class="row">
			<div class="columns large-12">
				<?php include('comments.php'); ?>
			</div>
		</div>
	</section>
<?php endif; ?>
		
<?php theme_include('footer'); ?>
