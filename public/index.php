<!DOCTYPE html>
<html class="no-js" lang="en-GB">

<head>
  <title>VR Bathroom</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="../../../assets/build/css/styles.css">
  <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
  <script src="https://rawgit.com/donmccurdy/aframe-extras/v2.1.1/dist/aframe-extras.loaders.min.js"></script>
</head>

<body>

  <a-scene>
    <a-assets>
      <a-asset-item id="bathroom-ply" src="assets/models/bathroom/bathroom.ply"></a-asset-item>
      <a-asset-item id="bathroom2-ply" src="assets/models/bathroom/bathroom-blendered.ply"></a-asset-item>
    </a-assets>

    <a-entity id="camera" camera="userHeight: 1.00" look-controls position="-4.692 14.414 -8.426" rotation="0 180 0">
    </a-entity>

    <a-sky color="#136171"></a-sky>
    <a-plane color="#ebebeb" rotation="-90 0 0" width="100" height="100"
  repeat="10 10"></a-plane>

    <a-entity id="ambience" light="type: ambient; color: #fff; intensity: 0.7" position="6 48 35"></a-entity>
    <a-entity id="light1" light="type: directional; color: #FFF1E0; intensity: 1" position="-5 35 20"></a-entity>
    <a-entity id="light2" light="type: directional; color: #FFF1E0; intensity: 1" position="10 36 23"></a-entity>

    <a-entity id="bathroomPly" ply-model="src: #bathroom2-ply"  position="0 13.000 0" rotation="-90 0 0"></a-entity>

  </a-scene>

</body>
</html>
