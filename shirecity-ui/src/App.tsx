import { BrowserRouter as Router, Routes, Route, useLocation } from 'react-router-dom';
import React, { useEffect } from 'react';
import Navbar from './components/Navbar';
import Footer from './components/Footer';
import Home from './pages/Home';
import Personal from './pages/Personal';
import Business from './pages/Business';
import Security from './pages/Security';
import Login from './pages/Login';
import About from './pages/About';
import Contact from './pages/Contact';
import OpenAccount from './pages/OpenAccount';
import Signup from './pages/Signup';
import ForgotPassword from './pages/ForgotPassword';
import ResetPassword from './pages/ResetPassword';
import PolicyPage from './pages/PolicyPage';

// Scroll to top on route change
function ScrollToTop() {
  const { pathname } = useLocation();
  useEffect(() => {
    window.scrollTo(0, 0);
  }, [pathname]);
  return null;
}

function MainLayout({ children }: { children: React.ReactNode }) {
  const location = useLocation();
  const authPaths = ['/login', '/signup', '/register', '/forgot-password', '/password/reset'];
  const isPasswordResetPage = location.pathname.startsWith('/password/reset/');
  const isAuthPage = authPaths.includes(location.pathname) || isPasswordResetPage;

  return (
    <div className="min-h-screen flex flex-col">
      {!isAuthPage && <Navbar />}
      <main className="flex-grow">
        {children}
      </main>
      {!isAuthPage && <Footer />}
    </div>
  );
}

export default function App() {
  return (
    <Router>
      <ScrollToTop />
      <MainLayout>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/personal" element={<Personal />} />
          <Route path="/business" element={<Business />} />
          <Route path="/security" element={<Security />} />
          <Route path="/who-we-are" element={<About />} />
          <Route path="/about" element={<About />} />
          <Route path="/contact-us" element={<Contact />} />
          <Route path="/open-account" element={<OpenAccount />} />
          <Route path="/register/new-account" element={<OpenAccount />} />
          <Route path="/login" element={<Login />} />
          <Route path="/forgot-password" element={<ForgotPassword />} />
          <Route path="/password/reset" element={<ForgotPassword />} />
          <Route path="/password/reset/:token" element={<ResetPassword />} />
          <Route path="/signup" element={<Signup />} />
          <Route path="/register" element={<Signup />} />
          <Route path="/terms" element={<PolicyPage variant="terms" />} />
          <Route path="/cookies" element={<PolicyPage variant="cookies" />} />
          <Route path="/legal" element={<PolicyPage variant="legal" />} />
        </Routes>
      </MainLayout>
    </Router>
  );
}
