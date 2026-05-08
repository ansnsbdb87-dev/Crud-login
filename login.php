<!DOCTYPE html>

<html class="light" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AdminPro - Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-on-surface": "#f3eff4",
                        "tertiary-container": "#080078",
                        "on-surface": "#1b1b1f",
                        "on-primary-fixed-variant": "#3f4274",
                        "secondary-container": "#ffd259",
                        "error-container": "#ffdad6",
                        "surface-bright": "#fcf8fd",
                        "surface-container-high": "#eae7ec",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed": "#07006c",
                        "on-secondary-fixed-variant": "#594400",
                        "primary-fixed": "#e0e0ff",
                        "surface": "#fcf8fd",
                        "on-surface-variant": "#46464f",
                        "on-primary-fixed": "#131546",
                        "secondary-fixed": "#ffdf93",
                        "error": "#ba1a1a",
                        "on-secondary-container": "#745a00",
                        "primary-container": "#171a4a",
                        "inverse-surface": "#303034",
                        "on-primary": "#ffffff",
                        "secondary-fixed-dim": "#edc14a",
                        "background": "#fcf8fd",
                        "tertiary-fixed-dim": "#c0c1ff",
                        "surface-container-highest": "#e5e1e6",
                        "surface-dim": "#dcd9de",
                        "on-error": "#ffffff",
                        "tertiary-fixed": "#e1e0ff",
                        "on-background": "#1b1b1f",
                        "surface-container-low": "#f6f2f7",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed": "#241a00",
                        "tertiary": "#010030",
                        "on-tertiary-container": "#7477ff",
                        "surface-container": "#f0edf2",
                        "secondary": "#765b00",
                        "outline-variant": "#c7c5d0",
                        "on-tertiary-fixed-variant": "#2f2ebe",
                        "on-secondary": "#ffffff",
                        "on-error-container": "#93000a",
                        "primary-fixed-dim": "#bfc2fc",
                        "on-primary-container": "#8083b9",
                        "primary": "#000032",
                        "outline": "#777680",
                        "surface-variant": "#e5e1e6",
                        "inverse-primary": "#bfc2fc",
                        "surface-tint": "#575a8d"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "margin-mobile": "16px",
                        "unit": "4px",
                        "sidebar-collapsed-width": "80px",
                        "sidebar-width": "280px",
                        "margin-desktop": "32px",
                        "container-max-width": "1440px"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-xl": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["48px", {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "headline-md": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "headline-xl": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md min-h-screen flex">
    <!-- Split Screen Container -->
    <main class="flex w-full min-h-screen">
        <!-- Left Side: Abstract Visuals -->
        <section class="hidden lg:flex lg:w-1/2 relative overflow-hidden bg-primary items-center justify-center">
            <div class="absolute inset-0 z-0">
                <img alt="AdminPro Aesthetic" class="w-full h-full object-cover opacity-40 mix-blend-overlay" data-alt="An abstract 3D visualization featuring deep navy blue crystalline structures and floating golden geometric particles. The scene is illuminated by a soft, ethereal gold glow from the center, creating a sense of premium high-tech depth. The lighting is moody and cinematic, emphasizing professional elegance and corporate sophistication within a dark-mode aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4m0MdByKTFVdEKMrstXbGj6y9-oUu97MzuadfeQuBBMiTQDSnHGCk9NhMnlOd9DXnZM-8-X0Rr88yhXY02X6LsXECt7MMJVBH1Lbox4EA2Zm9RF_NilGdST7E99ccBr3fbjBjJRAte85vT1IbNZJizoefd-1fQvF0IMWMV8kbonKiTSdOZbh3dNUZ8d7XQ2N3YhVpJalOQCBl4AEvnhH-CiK7YMFT8hcpvjEw-GIpvYRsgsONHZvnWaszxJDd9Taj7taRwcbQvt0" />
                <div class="absolute inset-0 bg-gradient-to-tr from-primary via-transparent to-secondary/10"></div>
            </div>
            <div class="relative z-10 p-16 max-w-xl">
                <h1 class="font-display-lg text-display-lg text-secondary-fixed mb-6">AdminPro</h1>
                <p class="font-headline-md text-headline-md text-on-primary-fixed-variant leading-relaxed">
                    Elevando a gestão estratégica com precisão técnica e sofisticação visual.
                </p>
                <div class="mt-12 flex gap-4">
                    <div class="w-12 h-1 bg-secondary-fixed rounded-full"></div>
                    <div class="w-4 h-1 bg-on-primary/30 rounded-full"></div>
                    <div class="w-4 h-1 bg-on-primary/30 rounded-full"></div>
                </div>
            </div>
        </section>
        <!-- Right Side: Login Area -->
        <section class="w-full lg:w-1/2 flex flex-col bg-surface relative">
            <!-- Mobile Brand Header -->
            <div class="lg:hidden p-gutter flex justify-center">
                <span class="font-headline-xl text-headline-xl font-bold text-primary">AdminPro</span>
            </div>
            <div class="flex-1 flex items-center justify-center p-gutter">
                <div class="w-full max-w-[440px]">
                    <!-- Glassmorphism Login Card -->
                    <div class="glass-card p-10 rounded-xl shadow-xl">
                        <header class="mb-10 text-center lg:text-left">
                            <h2 class="font-headline-xl text-headline-xl text-primary font-bold mb-2">Bem-vindo de volta</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">Acesse sua conta administrativa com segurança.</p>
                        </header>
                        <form class="space-y-6" method="POST" action="validar.php">
                            <!-- Email Input Group -->
                            <div class="group relative">
                                <label class="absolute -top-2.5 left-4 px-1 bg-white text-label-md font-label-md text-outline transition-all group-focus-within:text-secondary group-focus-within:font-bold" for="email">E-mail</label>
                                <div class="flex items-center border border-outline-variant rounded-lg px-4 py-4 focus-within:border-secondary focus-within:ring-1 focus-within:ring-secondary transition-all">
                                    <span class="material-symbols-outlined text-outline mr-3" data-icon="mail">mail</span>
                                    <input class="w-full bg-transparent border-none p-0 focus:ring-0 text-body-md font-body-md placeholder:text-outline-variant/50" id="email" name="email" placeholder="exemplo@adminpro.com" type="email" />
                                </div>
                            </div>
                            <!-- Password Input Group -->
                            <div class="group relative">
                                <label class="absolute -top-2.5 left-4 px-1 bg-white text-label-md font-label-md text-outline transition-all group-focus-within:text-secondary group-focus-within:font-bold" for="password">Senha</label>
                                <div class="flex items-center border border-outline-variant rounded-lg px-4 py-4 focus-within:border-secondary focus-within:ring-1 focus-within:ring-secondary transition-all">
                                    <span class="material-symbols-outlined text-outline mr-3" data-icon="lock">lock</span>
                                    <input class="w-full bg-transparent border-none p-0 focus:ring-0 text-body-md font-body-md placeholder:text-outline-variant/50" id="password" name="password" placeholder="••••••••" type="password" />
                                    <button class="ml-2 text-outline hover:text-primary transition-colors focus:outline-none" title="Mostrar Senha" type="button">
                                        <span class="material-symbols-outlined" data-icon="visibility">visibility</span>
                                    </button>
                                </div>
                            </div>
                            <div class="flex items-center justify-between py-1">
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input class="rounded border-outline-variant text-primary focus:ring-secondary w-4 h-4" type="checkbox" />
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Lembrar de mim</span>
                                </label>
                                <a class="font-body-sm text-body-sm text-secondary font-semibold hover:underline" href="#">Esqueceu a senha?</a>
                            </div>
                            <button class="w-full bg-primary hover:bg-primary-container text-on-primary py-4 rounded-lg font-headline-md text-headline-md font-bold transition-all duration-300 shadow-lg active:scale-[0.98] flex items-center justify-center gap-2 group" type="submit">
                                Entrar
                                <span class="material-symbols-outlined transition-transform group-hover:translate-x-1" data-icon="arrow_forward">arrow_forward</span>
                            </button>
                        </form>
                        <div class="mt-8 pt-8 border-t border-outline-variant/30 text-center">
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Não possui uma conta?
                                <a class="text-primary font-bold hover:underline ml-1" href="#">Solicitar acesso</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Links -->
            <footer class="p-gutter mt-auto flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="font-label-md text-label-md text-outline">
                    © 2024 AdminPro. Todos os direitos reservados.
                </div>
                <nav class="flex gap-6">
                    <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Política de Privacidade</a>
                    <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Central de Ajuda</a>
                </nav>
            </footer>
        </section>
    </main>
</body>

</html>