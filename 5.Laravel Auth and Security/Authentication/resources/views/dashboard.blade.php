<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | {{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Animated Background Particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: float 15s infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) rotate(720deg);
                opacity: 0;
            }
        }

        /* Main Container */
        .dashboard-container {
            position: relative;
            z-index: 1;
            padding: 30px;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            animation: slideDown 0.8s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            }
            50% {
                box-shadow: 0 10px 40px rgba(102, 126, 234, 0.6);
            }
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .notification-btn {
            position: relative;
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .notification-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            width: 20px;
            height: 20px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border-radius: 50%;
            font-size: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: bounce 1s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        /* Profile Card */
        .profile-section {
            display: grid;
            grid-template-columns: 350px 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }

        @media (max-width: 1024px) {
            .profile-section {
                grid-template-columns: 1fr;
            }
        }

        .profile-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 40px 30px;
            text-align: center;
            animation: fadeInLeft 0.8s ease-out 0.2s both;
            position: relative;
            overflow: hidden;
        }

        .profile-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 120px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            opacity: 0.3;
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .profile-avatar {
            position: relative;
            width: 130px;
            height: 130px;
            margin: 0 auto 25px;
            z-index: 1;
        }

        .avatar-ring {
            position: absolute;
            inset: -5px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            animation: rotate 3s linear infinite;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .avatar-img {
            position: relative;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            font-weight: 700;
            color: white;
            text-transform: uppercase;
            border: 4px solid #1a1a2e;
            overflow: hidden;
        }

        .avatar-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .online-status {
            position: absolute;
            bottom: 8px;
            right: 8px;
            width: 22px;
            height: 22px;
            background: #10b981;
            border: 4px solid #1a1a2e;
            border-radius: 50%;
            animation: statusPulse 2s infinite;
        }

        @keyframes statusPulse {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
            }
            50% {
                box-shadow: 0 0 0 8px rgba(16, 185, 129, 0);
            }
        }

        .profile-name {
            font-size: 26px;
            font-weight: 700;
            color: white;
            margin-bottom: 8px;
            position: relative;
            z-index: 1;
        }

        .profile-role {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.6);
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .profile-role i {
            color: #667eea;
        }

        .profile-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 25px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 16px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: white;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.5);
            margin-top: 4px;
        }

        .profile-info {
            text-align: left;
            margin-bottom: 25px;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .info-item:hover {
            padding-left: 10px;
            background: rgba(255, 255, 255, 0.02);
            border-radius: 8px;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-icon {
            width: 36px;
            height: 36px;
            background: rgba(102, 126, 234, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #667eea;
            font-size: 14px;
        }

        .info-content {
            flex: 1;
        }

        .info-label {
            font-size: 11px;
            color: rgba(255, 255, 255, 0.4);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .info-value {
            font-size: 14px;
            color: white;
            margin-top: 2px;
        }

        .logout-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .logout-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(245, 87, 108, 0.4);
        }

        /* Welcome Section */
        .welcome-section {
            animation: fadeInRight 0.8s ease-out 0.3s both;
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .welcome-card {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.2) 0%, rgba(118, 75, 162, 0.2) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 40px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .welcome-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(102, 126, 234, 0.3) 0%, transparent 70%);
            animation: glow 4s ease-in-out infinite;
        }

        @keyframes glow {
            0%, 100% {
                transform: scale(1) rotate(0deg);
            }
            50% {
                transform: scale(1.2) rotate(180deg);
            }
        }

        .welcome-content {
            position: relative;
            z-index: 1;
        }

        .welcome-greeting {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 8px;
        }

        .welcome-title {
            font-size: 36px;
            font-weight: 800;
            color: white;
            margin-bottom: 15px;
        }

        .welcome-title span {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .welcome-text {
            font-size: 15px;
            color: rgba(255, 255, 255, 0.6);
            line-height: 1.7;
            max-width: 500px;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 25px;
            transition: all 0.4s ease;
            animation: fadeInUp 0.8s ease-out both;
            position: relative;
            overflow: hidden;
        }

        .stat-card:nth-child(1) { animation-delay: 0.4s; }
        .stat-card:nth-child(2) { animation-delay: 0.5s; }
        .stat-card:nth-child(3) { animation-delay: 0.6s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .stat-card:hover {
            transform: translateY(-8px);
            border-color: rgba(102, 126, 234, 0.5);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .stat-card:hover::before {
            transform: scaleX(1);
        }

        .stat-card-icon {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .stat-card:nth-child(1) .stat-card-icon {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.2) 0%, rgba(102, 126, 234, 0.1) 100%);
            color: #667eea;
        }

        .stat-card:nth-child(2) .stat-card-icon {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.2) 0%, rgba(16, 185, 129, 0.1) 100%);
            color: #10b981;
        }

        .stat-card:nth-child(3) .stat-card-icon {
            background: linear-gradient(135deg, rgba(245, 87, 108, 0.2) 0%, rgba(245, 87, 108, 0.1) 100%);
            color: #f5576c;
        }

        .stat-card-value {
            font-size: 32px;
            font-weight: 800;
            color: white;
            margin-bottom: 5px;
        }

        .stat-card-label {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.5);
            margin-bottom: 15px;
        }

        .stat-card-trend {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
        }

        .trend-up {
            color: #10b981;
        }

        .trend-down {
            color: #f5576c;
        }

        /* Quick Actions */
        .quick-actions {
            margin-top: 30px;
            animation: fadeInUp 0.8s ease-out 0.7s both;
        }

        .section-title {
            font-size: 20px;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #667eea;
        }

        .actions-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        @media (max-width: 768px) {
            .actions-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .action-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 25px 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .action-card:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-5px) scale(1.02);
            border-color: rgba(102, 126, 234, 0.5);
        }

        .action-icon {
            width: 50px;
            height: 50px;
            margin: 0 auto 15px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: white;
            transition: all 0.3s ease;
        }

        .action-card:hover .action-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .action-label {
            font-size: 14px;
            font-weight: 500;
            color: white;
        }

        /* Activity Section */
        .activity-section {
            margin-top: 30px;
            animation: fadeInUp 0.8s ease-out 0.8s both;
        }

        .activity-list {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 25px;
        }

        .activity-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .activity-item:hover {
            padding-left: 10px;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .activity-icon.success {
            background: rgba(16, 185, 129, 0.2);
            color: #10b981;
        }

        .activity-icon.warning {
            background: rgba(251, 191, 36, 0.2);
            color: #fbbf24;
        }

        .activity-icon.info {
            background: rgba(102, 126, 234, 0.2);
            color: #667eea;
        }

        .activity-content {
            flex: 1;
        }

        .activity-title {
            font-size: 14px;
            color: white;
            margin-bottom: 3px;
        }

        .activity-time {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.4);
        }

        /* Livewire Counter Container */
        .livewire-section {
            margin-top: 30px;
            animation: fadeInUp 0.8s ease-out 0.9s both;
        }

        .livewire-container {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px;
            color: white;
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <!-- Animated Particles Background -->
    <div class="particles">
        @for ($i = 0; $i < 50; $i++)
            <div class="particle" style="
                left: {{ rand(0, 100) }}%;
                animation-delay: {{ rand(0, 15) }}s;
                animation-duration: {{ rand(10, 20) }}s;
            "></div>
        @endfor
    </div>

    <div class="dashboard-container">
        <!-- Header -->
        <header class="header">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <span class="logo-text">Dashboard</span>
            </div>
            <div class="header-actions">
                <button class="notification-btn">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </button>
                <button class="notification-btn">
                    <i class="fas fa-cog"></i>
                </button>
            </div>
        </header>

        <!-- Profile Section -->
        <div class="profile-section">
            <!-- Profile Card -->
            <div class="profile-card">
                <div class="profile-avatar">
                    <div class="avatar-ring"></div>
                    <div class="avatar-img">
                        @php
                            $user = auth()->user();
                            $name = $user->name ?? 'User';
                            $email = $user->email ?? 'user@example.com';
                            $initials = collect(explode(' ', $name))->map(fn($n) => strtoupper(substr($n, 0, 1)))->take(2)->join('');
                            $gravatarUrl = 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($email))) . '?d=404&s=200';
                        @endphp
                        <img src="{{ $gravatarUrl }}" alt="{{ $name }}"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <span style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center;">{{ $initials }}</span>
                    </div>
                    <div class="online-status"></div>
                </div>

                <h2 class="profile-name">{{ $name }}</h2>
                <p class="profile-role">
                    <i class="fas fa-shield-alt"></i>
                    Premium Member
                </p>

                <div class="profile-stats">
                    <div class="stat-item">
                        <div class="stat-value">128</div>
                        <div class="stat-label">Projects</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">1.2K</div>
                        <div class="stat-label">Followers</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">89</div>
                        <div class="stat-label">Following</div>
                    </div>
                </div>

                <div class="profile-info">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Email</div>
                            <div class="info-value">{{ $email }}</div>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Member Since</div>
                            <div class="info-value">{{ $user->created_at?->format('M d, Y') ?? 'N/A' }}</div>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Location</div>
                            <div class="info-value">San Francisco, CA</div>
                        </div>
                    </div>
                </div>

                <form action="{{ route('logout') }}" method="POST" class="profile-logout">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i>
                        Sign Out
                    </button>
                </form>
            </div>

            <!-- Welcome Section -->
            <div class="welcome-section">
                <div class="welcome-card">
                    <div class="welcome-content">
                        <p class="welcome-greeting">
                            @php
                                $hour = now()->hour;
                                $greeting = match(true) {
                                    $hour < 12 => 'Good Morning',
                                    $hour < 17 => 'Good Afternoon',
                                    default => 'Good Evening'
                                };
                            @endphp
                            {{ $greeting }}
                        </p>
                        <h1 class="welcome-title">Welcome back, <span>{{ explode(' ', $name)[0] }}</span>!</h1>
                        <p class="welcome-text">
                            Your dashboard is ready. You have 3 new notifications and 2 pending tasks waiting for your attention. Let's make today productive!
                        </p>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-card-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-card-value">2,847</div>
                        <div class="stat-card-label">Total Visits</div>
                        <div class="stat-card-trend trend-up">
                            <i class="fas fa-arrow-up"></i>
                            <span>12.5% from last month</span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-card-value">1,234</div>
                        <div class="stat-card-label">Active Users</div>
                        <div class="stat-card-trend trend-up">
                            <i class="fas fa-arrow-up"></i>
                            <span>8.2% from last week</span>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-card-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="stat-card-value">$48.5K</div>
                        <div class="stat-card-label">Revenue</div>
                        <div class="stat-card-trend trend-down">
                            <i class="fas fa-arrow-down"></i>
                            <span>3.1% from last month</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="quick-actions">
                    <h3 class="section-title">
                        <i class="fas fa-bolt"></i>
                        Quick Actions
                    </h3>
                    <div class="actions-grid">
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="action-label">New Project</div>
                        </div>
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="action-label">Reports</div>
                        </div>
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="action-label">Invite Team</div>
                        </div>
                        <div class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-cog"></i>
                            </div>
                            <div class="action-label">Settings</div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="activity-section">
                    <h3 class="section-title">
                        <i class="fas fa-history"></i>
                        Recent Activity
                    </h3>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon success">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Project "Dashboard Redesign" completed</div>
                                <div class="activity-time">2 hours ago</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon info">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">New team member joined your workspace</div>
                                <div class="activity-time">5 hours ago</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon warning">
                                <i class="fas fa-exclamation"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Server maintenance scheduled for tomorrow</div>
                                <div class="activity-time">1 day ago</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon success">
                                <i class="fas fa-download"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Monthly report exported successfully</div>
                                <div class="activity-time">2 days ago</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Livewire Component Section -->
        <div class="livewire-section">
            <h3 class="section-title">
                <i class="fas fa-code"></i>
                Interactive Component
            </h3>
            <div class="livewire-container">
                <livewire:counter />
            </div>
        </div>
    </div>

    <script>
        // Add smooth scroll behavior
        document.documentElement.style.scrollBehavior = 'smooth';

        // Add hover sound effect (optional - uncomment if wanted)
        // const cards = document.querySelectorAll('.stat-card, .action-card');
        // cards.forEach(card => {
        //     card.addEventListener('mouseenter', () => {
        //         // Add subtle interaction feedback
        //     });
        // });

        // Animate numbers on scroll
        const animateValue = (element, start, end, duration) => {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                element.textContent = value.toLocaleString();
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        };

        // Intersection Observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.stat-card, .action-card, .activity-item').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
