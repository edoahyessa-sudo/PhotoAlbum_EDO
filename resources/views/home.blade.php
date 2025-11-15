<!DOCTYPE html>
<html>
<head>
    <title>My Photo Album</title>
    <style>
        body { 
            font-family: 'Georgia', serif; 
            padding: 20px; 
            background-color: #eccacaff;
            text-align: center;
        }

        h1 { 
            color: #980d22;          /* deep red color */
            text-align: center;       /* center the header */
            font-size: 60px;          /* bigger font */
            font-weight: bold;        /* bold text */
            letter-spacing: 3px;      /* spacing between letters */
            margin-bottom: 40px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.3); /* subtle shadow */
        }

        .page-links {
            display: inline-block;
            background-color: #ffffff;
            padding: 25px 35px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
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
    </style>
</head>
<body>
    <h1>My Photo Album</h1>

    <div class="page-links">
        @foreach($pages as $number => $category)
            <a href="{{ url('/page/'.$number) }}">Page {{ $number }} - {{ $category }}</a>
        @endforeach
    </div>
</body>
</html>