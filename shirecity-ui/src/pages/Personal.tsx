import { motion } from 'motion/react';
import { CreditCard, Wallet, TrendingUp, ShieldCheck, ArrowRight, CheckCircle2 } from 'lucide-react';
import { Link } from 'react-router-dom';

export default function Personal() {
  return (
    <div className="pt-24 bg-bg-deep">
      <section className="py-32 glow-mesh">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-24">
            <span className="micro-label">Personal Solutions</span>
            <h1 className="text-6xl md:text-7xl font-display font-light text-gradient mb-8 leading-tight">
              Banking for <br />
              <span className="italic">individuals.</span>
            </h1>
            <p className="text-xl text-ink-muted font-light leading-relaxed">
              Refined financial tools designed to complement your lifestyle and accelerate your wealth.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div className="premium-card group">
              <div className="w-14 h-14 bg-white/5 text-accent rounded-full flex items-center justify-center mb-10 group-hover:bg-accent/20 transition-all duration-500">
                <Wallet size={28} weight="light" />
              </div>
              <h2 className="text-3xl font-display font-light mb-6">Elite Checking</h2>
              <p className="text-ink-muted mb-10 text-lg font-light leading-relaxed">
                Seamless daily management with zero boundaries. Experience banking without limits.
              </p>
              <ul className="space-y-6 mb-12">
                {[
                  'Zero maintenance or transaction fees',
                  'Priority global ATM access',
                  'Real-time liquidity management',
                  'Dedicated personal concierge'
                ].map((item, i) => (
                  <li key={i} className="flex items-center gap-4 text-sm text-slate-400 font-light">
                    <CheckCircle2 size={16} className="text-accent" />
                    {item}
                  </li>
                ))}
              </ul>
              <Link to="/open-account" className="btn-outline w-full flex items-center justify-center gap-2">
                Open Account <ArrowRight size={18} />
              </Link>
            </div>

            <div className="premium-card group">
              <div className="w-14 h-14 bg-white/5 text-accent rounded-full flex items-center justify-center mb-10 group-hover:bg-accent/20 transition-all duration-500">
                <TrendingUp size={28} weight="light" />
              </div>
              <h2 className="text-3xl font-display font-light mb-6">Private Savings</h2>
              <p className="text-ink-muted mb-10 text-lg font-light leading-relaxed">
                Industry-leading yields paired with sophisticated automated growth tools.
              </p>
              <ul className="space-y-6 mb-12">
                {[
                  '4.50% APY on all balances',
                  'Automated wealth optimization',
                  'Multi-currency savings vaults',
                  'Instant liquidity at all times'
                ].map((item, i) => (
                  <li key={i} className="flex items-center gap-4 text-sm text-slate-400 font-light">
                    <CheckCircle2 size={16} className="text-accent" />
                    {item}
                  </li>
                ))}
              </ul>
              <Link to="/signup" className="btn-premium w-full flex items-center justify-center gap-2">
                Start Growing <ArrowRight size={18} />
              </Link>
            </div>
          </div>
        </div>
      </section>

      <section className="py-40 border-t border-white/5">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="flex flex-col lg:flex-row items-center gap-24">
            <div className="flex-1">
              <span className="micro-label">The Card</span>
              <h2 className="text-5xl font-display font-light mb-8 leading-tight">
                The Shirescity <br />
                <span className="italic">Black Card.</span>
              </h2>
              <p className="text-lg text-ink-muted mb-12 font-light leading-relaxed">
                A masterpiece of engineering and financial freedom. 
                Unlimited 2% cashback, no fees, and global prestige.
              </p>
              <div className="space-y-8 mb-12">
                <div className="flex gap-6">
                  <div className="shrink-0 w-12 h-12 bg-white/5 rounded-full flex items-center justify-center text-accent">
                    <CreditCard size={24} />
                  </div>
                  <div>
                    <h4 className="font-display font-light text-xl mb-2">Instant Issuance</h4>
                    <p className="text-sm text-slate-500 font-light">Immediate access to your virtual card for secure online transactions.</p>
                  </div>
                </div>
                <div className="flex gap-6">
                  <div className="shrink-0 w-12 h-12 bg-white/5 rounded-full flex items-center justify-center text-accent">
                    <ShieldCheck size={24} />
                  </div>
                  <div>
                    <h4 className="font-display font-light text-xl mb-2">Zero Liability</h4>
                    <p className="text-sm text-slate-500 font-light">Total protection against unauthorized use with instant card control.</p>
                  </div>
                </div>
              </div>
              <Link to="/open-account" className="btn-premium">
                Apply Now
              </Link>
            </div>
            <div className="flex-1 relative">
              <motion.div
                animate={{ rotate: [0, 5, 0], y: [0, -10, 0] }}
                transition={{ duration: 6, repeat: Infinity, ease: "easeInOut" }}
                className="relative z-10"
              >
                <img 
                  src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&q=80&w=800" 
                  alt="Shirescity Card" 
                  className="rounded-[2rem] shadow-[0_50px_100px_-20px_rgba(0,0,0,0.5)] border border-white/10"
                  referrerPolicy="no-referrer"
                />
              </motion.div>
              <div className="absolute -top-20 -right-20 w-64 h-64 bg-accent/10 rounded-full blur-[100px]" />
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
