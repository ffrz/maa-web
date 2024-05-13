<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
  <div>
    <h1>Ma'had At-Tarbiyah Al-Atsariyah</h1>
    <h2>Jadwal Kajian Rutin</h2>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Pekan ke</th>
          <th>Hari</th>
          <th>Pemateri</th>
          <th>Lokasi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($base_items as $i => $item)
          <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $item->week }}</td>
            <td>{{ day_name($item->day) }}</td>
            <td>{{ $item->speaker }}</td>
            <td>{{ $item->location }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <hr>
    <h2>Agenda Kajian {{ $year }}</h2>
    @foreach ($schedule_items as $month => $items)
      <h3>{{ month_name($month) }}</h3>
      <table class="table">
        <thead>
          <tr>
            <th>Pekan ke</th>
            <th>Tanggal</th>
            <th>Hari</th>
            <th>Pemateri</th>
            <th>Tempat</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)
            <tr>
              <?php $dayOfWeek = $item['date']->dayOfWeek + 1; ?>
              @if ($dayOfWeek == 8)
                <?php $dayOfWeek = 1; ?>
              @endif
              <td>{{ $item['data']->week }}</td>
              <td>{{ $item['date']->format('j') }}</td>
              <td>{{ day_name($dayOfWeek) }}</td>
              <td>{{ $item['data']->speaker }}</td>
              <td>{{ $item['data']->location }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <ul>

      </ul>
    @endforeach
  </div>
</body>

</html>
