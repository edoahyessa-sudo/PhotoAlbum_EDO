<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        body { 
            font-family: 'Georgia', serif; 
            padding: 20px; 
            background-color: #f5f5f5;
            text-align: center;
        }

        h1 { 
            color: #980d22;           /* deep red color */
            text-align: center;        /* center the header */
            font-size: 60px;           /* big header */
            font-weight: bold;         /* bold text */
            letter-spacing: 3px;       /* spacing between letters */
            margin-bottom: 30px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
        }

        .page-links {
            display: inline-block;       /* box wraps content */
            background-color: #ffffff;
            padding: 25px 35px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
            margin-bottom: 30px;
        }

        .page-links a {
            display: inline-block;
            margin: 8px 12px;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #980d22;
            color: #ffffff;
            font-weight: bold;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .page-links a:hover {
            background-color: #ef2f4f;
            color: #ffffff;
            transform: scale(1.05);
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;      /* center images */
        }

        .gallery div {
            text-align: center;
            width: 150px;
            background-color: #ffffff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .gallery img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
        }

        .gallery p {
            margin-top: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>{{ $title }}</h1>

<!-- Page links -->
<div class="page-links">
    @foreach($categories as $num => $cat)
        <a href="{{ url('/page/'.$num) }}">Page {{ $num }} - {{ $cat }}</a>
    @endforeach
</div>

<!-- Image gallery -->
<div class="gallery">
    @forelse($images as $image)
        <div>
            <img src="{{ asset('images/'.$image['file']) }}" alt="{{ $image['title'] }}">
            <p>{{ $image['title'] }}</p>
        </div>
    @empty
        <p>No images found.</p>
    @endforelse
</div>

</body>
</html>
