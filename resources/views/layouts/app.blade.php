<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nudge</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;1,9..144,500&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          cream: '#FBF7EF',
          paper: '#F2ECDD',
          ink: '#2B2721',
          mute: '#8C8577',
          sage: '#7C9473',
          sagelight: '#E4EBDD',
          coral: '#E2795C',
          corallight: '#F8E1D6',
          butter: '#C79A3D',
          butterlight: '#FAEED2',
        },
        fontFamily: {
          display: ['Fraunces', 'serif'],
          sans: ['"DM Sans"', 'sans-serif'],
        },
      },
    },
  };
</script>
</head>
<body class="bg-cream text-ink font-sans">
  <div class="max-w-xl mx-auto px-5 py-12">
    <a href="{{ route('tasks.index') }}" class="flex items-center gap-2.5 mb-10 w-fit group">
      <span class="w-2.5 h-2.5 rounded-full bg-coral group-hover:scale-125 transition-transform"></span>
      <span class="font-display italic text-3xl tracking-tight">Nudge</span>
    </a>

    @if (session('success'))
      <div class="mb-6 text-sm bg-sagelight text-sage font-medium px-4 py-3 rounded-2xl">
        {{ session('success') }}
      </div>
    @endif

    @yield('content')
  </div>
</body>
</html>
