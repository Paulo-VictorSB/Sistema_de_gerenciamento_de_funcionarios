<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de Funcionários</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="src/js/index.js" defer></script>
</head>
<body>

    <div class="fundo_animado">
        <div class="glowing-ball"></div>
        <div class="glowing-ball"></div>
        <div class="glowing-ball"></div>
    </div>

    <script>
        // Função para criar uma bola com propriedades aleatórias
        function createBall(ball) {
            let posX = Math.random() * window.innerWidth;
            let posY = Math.random() * window.innerHeight;
            let size = 500; // Definindo o tamanho fixo de 500px
            let speedX = 0.5 + Math.random() * 1; // Velocidade mais lenta entre 0.5px e 1.5px
            let speedY = 0.5 + Math.random() * 1; // Velocidade mais lenta entre 0.5px e 1.5px

            // Define o tamanho fixo e a posição inicial da bola
            ball.style.width = `${size}px`;
            ball.style.height = `${size}px`;
            ball.style.left = `${posX}px`;
            ball.style.top = `${posY}px`;

            // Função para mover a bola
            function moveBall() {
                // Atualiza a posição
                posX += speedX;
                posY += speedY;

                // Verifica se a bola tocou nas bordas e muda a direção
                if (posX <= 0 || posX + size >= window.innerWidth) {
                    speedX = -speedX; // Inverte a direção no eixo X
                }
                if (posY <= 0 || posY + size >= window.innerHeight) {
                    speedY = -speedY; // Inverte a direção no eixo Y
                }

                // Aplica a nova posição à bola
                ball.style.left = `${posX}px`;
                ball.style.top = `${posY}px`;

                // Chama a função de animação em intervalos para movimento contínuo
                requestAnimationFrame(moveBall);
            }

            // Inicia o movimento da bola
            moveBall();
        }

        // Cria as 3 bolas
        const balls = document.querySelectorAll('.glowing-ball');
        balls.forEach(ball => createBall(ball));

        // Ajustar dinamicamente o tamanho das bolas se a janela for redimensionada
        window.addEventListener('resize', () => {
            const balls = document.querySelectorAll('.glowing-ball');
            balls.forEach(ball => createBall(ball));
        });
    </script>

    <header>
        <h1>Sistema de Gerenciamento de Funcionários</h1>
    </header>