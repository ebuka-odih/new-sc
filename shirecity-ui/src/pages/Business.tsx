import { motion } from 'motion/react';
import { Building2, BarChart3, Users, Globe, ArrowRight, CheckCircle2 } from 'lucide-react';
import { Link } from 'react-router-dom';

export default function Business() {
  return (
    <div className="pt-24 bg-bg-deep">
      <section className="py-32 glow-mesh">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <motion.div
              initial={{ opacity: 0, x: -20 }}
              animate={{ opacity: 1, x: 0 }}
            >
              <span className="micro-label">Institutional Solutions</span>
              <h1 className="text-6xl lg:text-8xl font-display font-light mb-8 leading-tight text-gradient">
                Scale without <br />
                <span className="italic">friction.</span>
              </h1>
              <p className="text-xl text-ink-muted mb-12 font-light leading-relaxed">
                From high-growth startups to global enterprises, Shirescity provides the institutional infrastructure to move at the speed of light.
              </p>
              <div className="flex flex-col sm:flex-row gap-6">
                <Link to="/open-account" className="btn-premium">Open Corporate Account</Link>
                <Link to="/contact-us" className="btn-outline">Speak with an Advisor</Link>
              </div>
            </motion.div>
            <div className="hidden lg:block relative">
               <img 
                src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" 
                alt="Business Analytics" 
                className="rounded-[3rem] shadow-[0_50px_100px_-20px_rgba(0,0,0,0.5)] border border-white/10"
                referrerPolicy="no-referrer"
              />
               <div className="absolute -bottom-10 -left-10 glass p-8 rounded-2xl shadow-2xl">
                  <div className="flex items-center gap-4 text-accent font-display font-light text-xl">
                    <BarChart3 size={28} />
                    <span>Real-time Analytics</span>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>

      <section className="py-40 border-y border-white/5">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {[
              {
                icon: <Building2 size={32} weight="light" />,
                title: "Treasury Management",
                desc: "Sophisticated tools for managing liquidity, risk, and complex capital structures."
              },
              {
                icon: <Users size={32} weight="light" />,
                title: "Team Infrastructure",
                desc: "Issue corporate cards with granular controls and automated expense reconciliation."
              },
              {
                icon: <Globe size={32} weight="light" />,
                title: "Global Settlement",
                desc: "Transact in 30+ currencies with institutional-grade exchange rates and zero latency."
              }
            ].map((item, i) => (
              <div key={i} className="premium-card group">
                <div className="w-16 h-16 bg-white/5 rounded-full flex items-center justify-center mb-10 group-hover:bg-accent/20 transition-all duration-500 text-accent">
                  {item.icon}
                </div>
                <h3 className="text-2xl font-display font-light mb-6">{item.title}</h3>
                <p className="text-ink-muted text-sm font-light leading-relaxed">{item.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className="py-40">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="bg-bg-surface rounded-[4rem] p-12 md:p-24 border border-white/5 relative overflow-hidden">
            <div className="absolute top-0 right-0 w-1/2 h-full bg-accent/5 blur-[120px] pointer-events-none" />
            <div className="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center relative z-10">
              <div>
                <span className="micro-label">Infrastructure</span>
                <h2 className="text-5xl font-display font-light mb-12 leading-tight">Built for <br /><span className="italic">modern commerce.</span></h2>
                <div className="space-y-8">
                  {[
                    "Integrated global billing systems",
                    "High-throughput API infrastructure",
                    "Automated compliance and tax reporting",
                    "Dedicated institutional account team",
                    "Priority 24/7 technical support"
                  ].map((item, i) => (
                    <div key={i} className="flex items-center gap-6">
                      <CheckCircle2 size={24} className="text-accent shrink-0" />
                      <span className="text-xl text-slate-300 font-light tracking-wide">{item}</span>
                    </div>
                  ))}
                </div>
                <Link to="/contact-us" className="btn-premium mt-16 px-12">Explore Enterprise</Link>
              </div>
              <div className="relative">
                <div className="aspect-square bg-white/5 rounded-[3rem] overflow-hidden border border-white/10">
                   <img 
                    src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=800" 
                    alt="Team working" 
                    className="w-full h-full object-cover opacity-80"
                    referrerPolicy="no-referrer"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
