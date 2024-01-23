<?php
echo '<?xml version="1.0"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   @foreach($surgicalspeciality as $surgicalspecialit)
    <url>
        <loc>{{ url('/') }}/surgical-speciality/{{$surgicalspecialit->url}}</loc>
    
    
        <lastmod> {{ $surgicalspecialit->updated_at }} </lastmod>
    
        <changefreq>daily</changefreq>
    
        <priority>0.1</priority>
    </url>
    @endforeach
</urlset>