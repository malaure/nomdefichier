<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="2299.4">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica; min-height: 14.0px}
    span.Apple-tab-span {white-space:pre}
  </style>
</head>
<body>
<p class="p1">&lt;?php</p>
<p class="p1"><span class="Apple-tab-span">	</span>$client = $_POST['client'];</p>
<p class="p1"><span class="Apple-tab-span">	</span>$project = $_POST['project'];</p>
<p class="p1"><span class="Apple-tab-span">	</span>$dimensions = $_POST['dimensions'];</p>
<p class="p1"><span class="Apple-tab-span">	</span>$current_month = date('m');</p>
<p class="p1"><span class="Apple-tab-span">	</span>$current_year = date('Y');</p>
<p class="p2"><br></p>
<p class="p1"><span class="Apple-tab-span">	</span>$filename = $client . '_' . $project . '_' . $dimensions . '_' . $current_month . '_' . $current_year . '.pdf';</p>
<p class="p2"><br></p>
<p class="p1"><span class="Apple-tab-span">	</span>echo 'Le nom de fichier généré est : ' . $filename;</p>
<p class="p1">?&gt;</p>
</body>
</html>
