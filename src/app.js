const canvas = document.querySelector('canvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth * window.devicePixelRatio;
canvas.height = window.innerHeight * window.devicePixelRatio;

canvas.style.width = `${window.innerWidth}px`;
canvas.style.height = `${window.innerHeight}px`;

class Particle {
	constructor(x, y, effect) {
		this.originalX = x;
		this.originalY = y;
		this.effect = effect;
		this.x = Math.floor(Math.random() * x);
		this.y = Math.floor(Math.random() * y);
		this.ctx = effect.ctx;
		this.ctx.fillStyle = 'white';
		this.vx = 0;
		this.vy = 0;
		this.ease = 0.1;
		this.friction = 0.95;
		this.dx = 0;
		this.dy = 0;
		this.distance = 0;
		this.force = 0;
		this.angle = 0;
		this.size = Math.floor(Math.random() * 3);

		this.draw();
	}

	draw() {
		this.ctx.beginPath();
		this.ctx.fillRect(this.x, this.y, this.size, this.size);
	}
	
	update() {
		this.dx = this.effect.mouse.x - this.x;
		this.dy = this.effect.mouse.y - this.y;
		this.distance = this.dx * this.dx + this.dy * this.dy;
		this.force = -this.effect.mouse.radius / this.distance * 4;

		if (this.distance < this.effect.mouse.radius) {
			this.angle = Math.atan2(this.dy, this.dx);
			this.vx += this.force * Math.cos(this.angle);
			this.vy += this.force * Math.sin(this.angle);
		}

		this.x += (this.vx *= this.friction) + (this.originalX - this.x) * this.ease;
		this.y += (this.vy *= this.friction) + (this.originalY - this.y) * this.ease;
		this.draw();
	}

}

class Effect {
	constructor(width, height, context) {
		this.width = width;
		this.height = height;
		this.ctx = context;
		this.particlesArray = [];
		this.gap = 20;
		this.mouse = {
			radius: 3000,
			x: 0,
			y: 0
		}
		window.addEventListener('mousemove', (e) => {
			this.mouse.x = e.clientX * window.devicePixelRatio;
			this.mouse.y = e.pageY * window.devicePixelRatio;
		});

		window.addEventListener('resize', () => {
			canvas.width = window.innerWidth * window.devicePixelRatio;
			canvas.height = window.innerHeight * window.devicePixelRatio;
			this.width = canvas.width;
			this.height = canvas.height;

			this.gap = window.innerWidth / 100;

			canvas.style.width = `${window.innerWidth}px`;
			canvas.style.height = `${window.innerHeight}px`;

			this.particlesArray = [];
			this.init();
		});

		this.init();
	}

	init() {
		for (let y = 0; y < this.height; y += this.gap) {
			for (let x = 0; x < this.width; x += this.gap) {
				this.particlesArray.push(new Particle(x, y, this));
			}
		}
	}

	update() {
		this.ctx.clearRect(0, 0, this.width, this.height);
		for (let i = 0; i < this.particlesArray.length; i++) {
			this.particlesArray[i].update();
		}
	}
}

let effect = new Effect(canvas.width, canvas.height, ctx);

function animate() {
	effect.update();
	requestAnimationFrame(animate);
}

animate();
