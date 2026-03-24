import { motion } from 'motion/react';
import { ArrowRight, Mail, Lock } from 'lucide-react';
import { Link } from 'react-router-dom';
import { getCookieValue } from '../lib/cookies';

export default function Login() {
  const csrfToken = getCookieValue('XSRF-TOKEN');

  return (
    <div className="min-h-screen pt-24 bg-bg-deep flex items-center justify-center p-6 glow-mesh">
      <motion.div 
        initial={{ opacity: 0, y: 20 }}
        animate={{ opacity: 1, y: 0 }}
        className="w-full max-w-md"
      >
        <div className="premium-card p-12">
          <div className="text-center mb-12">
            <div className="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center mx-auto mb-6 text-accent">
              <Lock size={32} weight="light" />
            </div>
            <h1 className="text-3xl font-display font-light mb-2">Welcome Back</h1>
            <p className="text-ink-muted font-light">Enter your credentials to access Shirescity.</p>
          </div>

          <form className="space-y-8" action="/login" method="POST">
            <input type="hidden" name="_token" value={csrfToken} />
            <div className="space-y-6">
              <div>
                <label className="micro-label mb-3 block">Email Address</label>
                <div className="relative">
                  <Mail className="absolute left-4 top-1/2 -translate-y-1/2 text-white/30" size={20} />
                  <input 
                    name="email"
                    type="email" 
                    className="w-full bg-white/5 border border-white/10 rounded-xl pl-12 pr-5 py-4 text-white focus:outline-none focus:border-accent/50 transition-all font-light"
                    placeholder="name@company.com"
                    required
                  />
                </div>
              </div>
              <div>
                <div className="flex justify-between items-center mb-3">
                  <label className="micro-label">Password</label>
                  <Link to="/forgot-password" className="text-xs text-accent hover:underline font-light">Forgot?</Link>
                </div>
                <div className="relative">
                  <Lock className="absolute left-4 top-1/2 -translate-y-1/2 text-white/30" size={20} />
                  <input 
                    name="password"
                    type="password" 
                    className="w-full bg-white/5 border border-white/10 rounded-xl pl-12 pr-5 py-4 text-white focus:outline-none focus:border-accent/50 transition-all font-light"
                    placeholder="••••••••"
                    required
                  />
                </div>
              </div>
            </div>

            <div className="flex items-center gap-3">
              <input type="checkbox" id="remember" name="remember" className="w-4 h-4 rounded border-white/10 bg-white/5 text-accent focus:ring-accent" />
              <label htmlFor="remember" className="text-sm text-ink-muted font-light">Remember me for 30 days</label>
            </div>

            <button type="submit" className="btn-premium w-full py-5 text-lg flex items-center justify-center gap-3">
              Sign In <ArrowRight size={20} />
            </button>
          </form>

          <div className="mt-12 text-center">
            <p className="text-ink-muted font-light text-sm">
              New to Shirescity? <Link to="/open-account" className="text-accent hover:underline">Create an account</Link>
            </p>
          </div>
        </div>

        <p className="text-center text-[10px] uppercase tracking-[0.2em] text-white/20 mt-12">
          Securely encrypted with 256-bit SSL. <br />
          Shirescity is a member of FDIC.
        </p>
      </motion.div>
    </div>
  );
}
