let detail_item = document.querySelector('.detail-item');
let canvas = document.getElementById('dotsCanvas');
canvas.width = detail_item.offsetWidth;
canvas.height = detail_item.offsetHeight;
let ctx = canvas.getContext('2d');

let dots = [];
let numDots = 800;
const maxDots = 2000; // Aumentar el límite máximo de puntos
const newPointsInterval = 10000000; // Intervalo de tiempo para agregar nuevos puntos

// Inicializar puntos
for (let i = 0; i < numDots; i++) {
    dots.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        size: 1,
        color: 'rgba(255, 255, 255, 0)'
    });
}

const drawDots = () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    dots.forEach(dot => {
        ctx.fillStyle = dot.color;
        ctx.beginPath();
        ctx.arc(dot.x, dot.y, dot.size, 0, Math.PI * 2);
        ctx.fill();
    });
}

const drawLines = (triangles) => {
    ctx.lineWidth = 1;
    const lineColor = 'rgba(255, 255, 255, 0.1)';

    for (let i = 0; i < triangles.length; i += 3) {
        let p0 = dots[triangles[i]];
        let p1 = dots[triangles[i + 1]];
        let p2 = dots[triangles[i + 2]];

        ctx.strokeStyle = lineColor;
        ctx.beginPath();
        ctx.moveTo(p0.x, p0.y);
        ctx.lineTo(p1.x, p1.y);
        ctx.lineTo(p2.x, p2.y);
        ctx.closePath();
        ctx.stroke();
    }
}

const updateDelaunay = () => {
    const points = dots.map(dot => [dot.x, dot.y]);
    const delaunay = Delaunator.from(points);
    const triangles = delaunay.triangles;
    drawLines(triangles);
}

// Dibuja los puntos y líneas iniciales
drawDots();
updateDelaunay();

// Función para agregar un nuevo punto aleatorio
const addRandomPoint = () => {
    // Crea un nuevo punto aleatorio en toda la pantalla
    dots.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        size: 1,
        color: 'rgba(255, 255, 255, 0.1)'
    });

    // Limitar el número de puntos
    if (dots.length > maxDots) {
        dots.splice(0, dots.length - maxDots);
    }

    drawDots();
    updateDelaunay();
}

// Agregar un nuevo punto cada 500ms usando requestAnimationFrame
let lastTime = 0;
const addPointsLoop = (time) => {
    if (time - lastTime > newPointsInterval) {
        addRandomPoint();
        lastTime = time;
    }
    requestAnimationFrame(addPointsLoop);
}
requestAnimationFrame(addPointsLoop);

// Manejar el evento de movimiento del mouse con throttling
let lastMouseMoveTime = 0;
const throttleMouseMove = (event) => {
    const now = Date.now();
    if (now - lastMouseMoveTime < 100) return; // Throttle a 10 FPS
    lastMouseMoveTime = now;

    let mouse = {
        x: event.clientX - canvas.getBoundingClientRect().left,
        y: event.clientY - canvas.getBoundingClientRect().top
    }

    for (let i = 0; i < 3; i++) {
        dots.push({
            x: mouse.x + (Math.random() - 0.5) * 60,
            y: mouse.y + (Math.random() - 0.5) * 60,
            size: 1,
            color: 'rgba(255, 255, 255, 0.1)'
        });
    }

    drawDots();
    updateDelaunay();
}
document.addEventListener('mousemove', throttleMouseMove);

// Manejar el evento de redimensionar la ventana
window.addEventListener('resize', () => {
    canvas.width = detail_item.offsetWidth;
    canvas.height = detail_item.offsetHeight;

    drawDots();
    updateDelaunay();
});
