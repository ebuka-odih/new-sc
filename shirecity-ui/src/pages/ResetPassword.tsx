import { ArrowRight, Lock, Mail } from 'lucide-react';
import { Link, useLocation, useParams } from 'react-router-dom';
import { getCookieValue } from '../lib/cookies';

export default function ResetPassword() {
  const csrfToken = getCookieValue('XSRF-TOKEN');
  const { token = '' } = useParams();
  const location = useLocation();
  const email = new URLSearchParams(location.search).get('email') ?? '';

  return (
    <div className="min-h-screen pt-24 bg-bg-deep flex items-center justify-center p-6 glow-mesh">
      <div className="w-full max-w-xl">
        <div className="premium-card p-12">
          <div className="text-center mb-12">
            <div className="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center mx-auto mb-6 text-accent">
              <Lock size={32} />
            </div>
            <h1 className="text-4xl font-display font-light mb-3">Choose a New Password</h1>
            <p className="text-ink-muted font-light">
              Complete password recovery without leaving the new Shirescity interface.
            </p>
          </div>

          <form action="/password/reset" method="POST" className="space-y-8">
            <input type="hidden" name="_token" value={csrfToken} />
            <input type="hidden" name="token" value={token} />

            <div className="grid grid-cols-1 gap-6">
              <div>
                <label className="micro-label mb-3 block">Email Address</label>
                <div className="relative">
                  <Mail className="absolute left-4 top-1/2 -translate-y-1/2 text-white/30" size={20} />
                  <input
                    name="email"
                    type="email"
                    required
                    defaultValue={email}
                    className="w-full bg-white/5 border border-white/10 rounded-xl pl-12 pr-5 py-4 text-white focus:outline-none focus:border-accent/50 transition-all font-light"
                    placeholder="name@company.com"
                  />
                </div>
              </div>

              <div>
                <label className="micro-label mb-3 block">New Password</label>
                <div className="relative">
                  <Lock className="absolute left-4 top-1/2 -translate-y-1/2 text-white/30" size={20} />
                  <input
                    name="password"
                    type="password"
                    required
                    className="w-full bg-white/5 border border-white/10 rounded-xl pl-12 pr-5 py-4 text-white focus:outline-none focus:border-accent/50 transition-all font-light"
                    placeholder="Choose a secure password"
                  />
                </div>
              </div>

              <div>
                <label className="micro-label mb-3 block">Confirm Password</label>
                <div className="relative">
                  <Lock className="absolute left-4 top-1/2 -translate-y-1/2 text-white/30" size={20} />
                  <input
                    name="password_confirmation"
                    type="password"
                    required
                    className="w-full bg-white/5 border border-white/10 rounded-xl pl-12 pr-5 py-4 text-white focus:outline-none focus:border-accent/50 transition-all font-light"
                    placeholder="Repeat your password"
                  />
                </div>
              </div>
            </div>

            <button type="submit" className="btn-premium w-full py-5 text-lg flex items-center justify-center gap-3">
              Reset Password <ArrowRight size={20} />
            </button>
          </form>

          <div className="mt-10 text-center text-sm text-ink-muted font-light">
            Return to <Link to="/login" className="text-accent hover:underline">client login</Link>
          </div>
        </div>
      </div>
    </div>
  );
}
