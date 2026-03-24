import { motion } from 'motion/react';
import { Shield, Lock, Eye, CheckCircle, Smartphone, Bell } from 'lucide-react';

export default function Security() {
  return (
    <div className="pt-24 bg-bg-deep">
      <section className="py-32 glow-mesh">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-24">
            <span className="micro-label">Security Protocol</span>
            <h1 className="text-6xl md:text-7xl font-display font-light text-gradient mb-8 leading-tight">
              Fort Knox <br />
              <span className="italic">Intelligence.</span>
            </h1>
            <p className="text-xl text-ink-muted font-light leading-relaxed">
              Proactive defense systems and institutional-grade encryption protecting every asset.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {[
              {
                icon: <Lock size={32} weight="light" />,
                title: "Quantum Encryption",
                desc: "Data secured with 256-bit AES protocols, ensuring total privacy for every transaction."
              },
              {
                icon: <Eye size={32} weight="light" />,
                title: "Predictive Defense",
                desc: "AI-driven systems monitoring for anomalies and threats before they manifest."
              },
              {
                icon: <Smartphone size={32} weight="light" />,
                title: "Biometric Access",
                desc: "Multi-factor authentication integrated with native biometric security layers."
              }
            ].map((item, i) => (
              <div key={i} className="premium-card text-center group">
                <div className="w-20 h-20 bg-white/5 rounded-full flex items-center justify-center mx-auto mb-8 group-hover:bg-accent/20 transition-all duration-500 text-accent">
                  {item.icon}
                </div>
                <h3 className="text-2xl font-display font-light mb-4">{item.title}</h3>
                <p className="text-ink-muted text-sm font-light leading-relaxed">{item.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className="py-40 border-t border-white/5">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="flex flex-col lg:flex-row items-center gap-24">
            <div className="flex-1">
              <div className="relative">
                <img 
                  src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800" 
                  alt="Security Tech" 
                  className="rounded-[3rem] shadow-[0_50px_100px_-20px_rgba(0,0,0,0.5)] border border-white/10"
                  referrerPolicy="no-referrer"
                />
                <div className="absolute -bottom-10 -right-10 glass p-8 rounded-2xl shadow-2xl">
                  <div className="flex items-center gap-4 text-accent font-display font-light text-xl">
                    <CheckCircle size={28} />
                    <span>Protocol Active</span>
                  </div>
                </div>
              </div>
            </div>
            <div className="flex-1 space-y-12">
              <div>
                <span className="micro-label">Proactive Protection</span>
                <h2 className="text-5xl font-display font-light mb-8 leading-tight">Beyond <span className="italic">Standard.</span></h2>
                <p className="text-lg text-ink-muted font-light leading-relaxed">Our security infrastructure is engineered to anticipate the challenges of tomorrow, providing peace of mind in an evolving digital landscape.</p>
              </div>
              
              <div className="space-y-10">
                {[
                  {
                    icon: <Bell size={20} />,
                    title: "Instant Intelligence",
                    desc: "Real-time notifications for any account activity, keeping you in total control."
                  },
                  {
                    icon: <Shield size={20} />,
                    title: "FDIC Protection",
                    desc: "Your assets are insured by the FDIC up to $250,000 per account holder."
                  },
                  {
                    icon: <Lock size={20} />,
                    title: "Disposable Identity",
                    desc: "Generate single-use virtual cards for secure transactions across the web."
                  }
                ].map((feature, i) => (
                  <div key={i} className="flex gap-6">
                    <div className="shrink-0 w-12 h-12 bg-white/5 rounded-full flex items-center justify-center text-accent">
                      {feature.icon}
                    </div>
                    <div>
                      <h4 className="font-display font-light text-xl mb-2">{feature.title}</h4>
                      <p className="text-sm text-slate-500 font-light">{feature.desc}</p>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
