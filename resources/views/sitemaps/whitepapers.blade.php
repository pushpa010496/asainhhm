<?php
echo '<?xml version="1.0"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   @foreach($whitepapers as $whitepaper)
    <url>
        <loc>{{ url('/') }}/whitepapers/{{$whitepaper->url}}</loc>
    
    
        <lastmod> {{ $whitepaper->updated_at }} </lastmod>
    
        <changefreq>daily</changefreq>
    
        <priority>0.1</priority>
    </url>
    @endforeach
</urlset>