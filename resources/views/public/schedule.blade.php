<?php $nav_active = 'schedule'; ?>

@extends('public.layout')
@section('content')
  <section>
    <h1>Agenda Kajian {{ $year }}</h1>
    @foreach ($schedule_items as $month => $items)
      <div>
        <h3 class="mt-5">{{ month_name($month) }} {{ $year }}</h3>
        <table class="table table-striped table-hover table-sm">
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
      </div>
    @endforeach
  </section>
@endSection
