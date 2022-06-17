<head>
  <style>
    body {
      margin: 0;
      background-color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    div {
      width: 70vmin;
    }
  </style>
</head>

<body>
  <div>
    {!! $chart->renderHtml() !!}
  </div>

  {!! $chart->renderChartJsLibrary() !!}
  {!! $chart->renderJs() !!}
</body>
