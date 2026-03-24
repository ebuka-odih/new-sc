import { motion } from 'motion/react';
import { Shield, Smartphone, Zap, Globe, ArrowRight, CheckCircle2, Landmark } from 'lucide-react';
import { Link } from 'react-router-dom';

export default function Home() {
  return (
    <div className="pt-24 bg-bg-deep">
      {/* Hero Section */}
      <section className="relative min-h-[90vh] flex items-center overflow-hidden glow-mesh">
        <div className="max-w-7xl mx-auto px-6 lg:px-8 w-full relative z-10">
          <div className="flex flex-col items-center text-center">
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.8 }}
              className="max-w-4xl"
            >
              <span className="micro-label">Future of Finance</span>
              <h1 className="text-[12vw] md:text-[8vw] lg:text-[7vw] font-display font-light leading-[0.9] tracking-[-0.04em] mb-12 text-gradient">
                Banking for <br />
                the <span className="italic font-normal">Elite</span>
              </h1>
              <p className="text-lg md:text-xl text-ink-muted mb-12 max-w-2xl mx-auto font-light leading-relaxed">
                Experience the next generation of financial management. 
                Secure, intelligent, and crafted for those who demand more.
              </p>
              <div className="flex flex-col sm:flex-row gap-6 justify-center">
                <Link to="/open-account" className="btn-premium">
                  Open Account
                </Link>
                <Link to="/personal" className="btn-outline">
                  Explore Services
                </Link>
              </div>
            </motion.div>
          </div>
        </div>

        {/* Decorative Elements */}
        <div className="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-bg-deep to-transparent" />
      </section>

      {/* Stats Section - Minimalist */}
      <section className="py-32 border-y border-white/5">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="grid grid-cols-2 md:grid-cols-4 gap-12">
            {[
              { label: 'Global Assets', value: '$15B+' },
              { label: 'Active Clients', value: '2M+' },
              { label: 'Countries', value: '45+' },
              { label: 'Uptime', value: '99.9%' },
            ].map((stat, i) => (
              <div key={i} className="text-center md:text-left">
                <p className="text-3xl font-display font-light mb-2">{stat.value}</p>
                <p className="text-[10px] uppercase tracking-[0.2em] text-ink-muted font-bold">{stat.label}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Features - Premium Cards */}
      <section className="py-40">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="mb-24">
            <span className="micro-label">Capabilities</span>
            <h2 className="text-5xl md:text-6xl font-display font-light max-w-2xl leading-tight">
              Precision tools for <br />
              <span className="text-ink-muted">wealth management.</span>
            </h2>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {[
              {
                icon: <Shield className="text-accent" size={24} />,
                title: 'Quantum Security',
                desc: 'Multi-layered encryption protocols designed for the highest level of asset protection.'
              },
              {
                icon: <Smartphone className="text-accent" size={24} />,
                title: 'Native Experience',
                desc: 'A fluid, high-performance mobile interface that puts your portfolio at your fingertips.'
              },
              {
                icon: <Zap className="text-accent" size={24} />,
                title: 'Instant Liquidity',
                desc: 'Execute global transfers and currency exchanges with zero latency and real-time settlement.'
              },
              {
                icon: <Globe className="text-accent" size={24} />,
                title: 'Global Concierge',
                desc: 'Access premium travel benefits and personalized support wherever your journey takes you.'
              },
              {
                icon: <CheckCircle2 className="text-accent" size={24} />,
                title: 'AI Insights',
                desc: 'Predictive analytics that help you identify opportunities and optimize your spending.'
              },
              {
                icon: <Landmark className="text-accent" size={24} />,
                title: 'Institutional Grade',
                desc: 'The same tools used by major financial institutions, now available for your personal wealth.'
              }
            ].map((feature, i) => (
              <motion.div
                key={i}
                whileHover={{ y: -10 }}
                className="premium-card group"
              >
                <div className="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center mb-8 group-hover:bg-accent/20 transition-colors duration-500">
                  {feature.icon}
                </div>
                <h3 className="text-xl font-display font-light mb-4">{feature.title}</h3>
                <p className="text-ink-muted text-sm leading-relaxed font-light">{feature.desc}</p>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Immersive Visual Section */}
      <section className="py-40 bg-bg-surface relative overflow-hidden">
        <div className="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <div>
              <span className="micro-label">The Card</span>
              <h2 className="text-5xl font-display font-light mb-8 leading-tight">
                Crafted from <br />
                <span className="italic">Aerospace Titanium.</span>
              </h2>
              <p className="text-lg text-ink-muted mb-12 font-light leading-relaxed">
                The Shirescity Black Card is more than a payment method. It is a symbol of 
                financial freedom, offering unlimited 2% cashback and exclusive 
                access to the world's most prestigious lounges.
              </p>
              <Link to="/contact-us" className="btn-outline">
                Request Invitation
              </Link>
            </div>
            <div className="relative">
              <motion.div
                animate={{ rotateY: [0, 15, 0], rotateX: [0, 5, 0] }}
                transition={{ duration: 8, repeat: Infinity, ease: "easeInOut" }}
                className="perspective-1000"
              >
                <div className="w-full aspect-[1.586/1] bg-gradient-to-br from-zinc-800 to-black rounded-2xl shadow-[0_50px_100px_-20px_rgba(0,0,0,0.5)] border border-white/10 p-8 flex flex-col justify-between relative overflow-hidden">
                  <div className="absolute top-0 right-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10" />
                  <div className="flex justify-between items-start relative z-10">
                    <div className="w-12 h-10 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-md opacity-80" />
                    <Landmark size={32} className="text-white/20" />
                  </div>
                  <div className="relative z-10">
                    <p className="text-white/40 text-[10px] tracking-[0.3em] uppercase mb-2">Shirescity Black</p>
                    <p className="text-white text-xl tracking-[0.2em] font-light">4532 •••• •••• 8892</p>
                  </div>
                </div>
              </motion.div>
            </div>
          </div>
        </div>
      </section>

      {/* Final CTA */}
      <section className="py-60 text-center relative overflow-hidden">
        <div className="absolute inset-0 opacity-30">
          <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-accent rounded-full blur-[200px]" />
        </div>
        <div className="max-w-4xl mx-auto px-6 relative z-10">
          <h2 className="text-6xl md:text-8xl font-display font-light mb-12 tracking-tighter">
            Elevate your <br />
            <span className="italic">standard.</span>
          </h2>
          <Link to="/open-account" className="btn-premium text-lg px-12 py-5">
            Begin Your Journey
          </Link>
        </div>
      </section>
    </div>
  );
}
