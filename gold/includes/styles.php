<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    :root {
        --primary: #198754;
        --primary-light: #20c997;
        --primary-dark: #146c43;
        --secondary: #6366f1;
        --accent: #f59e0b;
        --danger: #ef4444;
        --success: #10b981;
        --warning: #f59e0b;
        --info: #3b82f6;
        --purple: #8b5cf6;
        --pink: #ec4899;
    }
    
    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #0d4a2e 0%, #146c43 100%);
        min-height: 100vh;
        overflow-x: hidden;
    }
    
    .bg-animated {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #0d4a2e 0%, #146c43 50%, #198754 100%);
        z-index: -1;
    }
    
    .bg-animated::before {
        content: '';
        position: absolute;
        width: 200%;
        height: 200%;
        background: 
            radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.08) 0%, transparent 50%);
        animation: float 20s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translate(0, 0) rotate(0deg); }
        50% { transform: translate(-50px, -50px) rotate(180deg); }
    }
    
    /* Sidebar Styles */
    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        width: 280px;
        height: 100vh;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(20px);
        box-shadow: 4px 0 30px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        overflow-y: auto;
        padding: 2rem 0;
    }
    
    .sidebar::-webkit-scrollbar {
        width: 6px;
    }
    
    .sidebar::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        border-radius: 10px;
    }
    
    .sidebar-brand {
        padding: 0 2rem 2rem;
        text-align: center;
        border-bottom: 2px solid rgba(0, 0, 0, 0.05);
        margin-bottom: 2rem;
    }
    
    .sidebar-brand h2 {
        font-size: 1.75rem;
        font-weight: 900;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin: 0;
    }
    
    .sidebar-brand p {
        color: #64748b;
        font-size: 0.875rem;
        font-weight: 600;
        margin: 0.5rem 0 0;
    }
    
    .sidebar-menu {
        padding: 0 1rem;
    }
    
    .menu-section {
        margin-bottom: 2rem;
    }
    
    .menu-label {
        color: #94a3b8;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 0 1rem;
        margin-bottom: 0.75rem;
    }
    
    .menu-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        color: #475569;
        text-decoration: none;
        border-radius: 12px;
        margin-bottom: 0.5rem;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }
    
    .menu-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(135deg, var(--item-color-1), var(--item-color-2));
        transform: scaleY(0);
        transition: transform 0.3s;
        border-radius: 0 4px 4px 0;
    }
    
    .menu-item:hover {
        background: linear-gradient(135deg, rgba(var(--item-rgb), 0.1), rgba(var(--item-rgb), 0.05));
        color: var(--item-color-1);
        transform: translateX(4px);
    }
    
    .menu-item.active {
        background: linear-gradient(135deg, rgba(var(--item-rgb), 0.15), rgba(var(--item-rgb), 0.08));
        color: var(--item-color-1);
        box-shadow: 0 4px 12px rgba(var(--item-rgb), 0.2);
    }
    
    .menu-item.active::before {
        transform: scaleY(1);
    }
    
    .menu-item i {
        font-size: 1.25rem;
        width: 24px;
        text-align: center;
    }
    
    .menu-item.green {
        --item-color-1: #10b981;
        --item-color-2: #059669;
        --item-rgb: 16, 185, 129;
    }
    
    .menu-item.blue {
        --item-color-1: #3b82f6;
        --item-color-2: #2563eb;
        --item-rgb: 59, 130, 246;
    }
    
    .menu-item.purple {
        --item-color-1: #8b5cf6;
        --item-color-2: #7c3aed;
        --item-rgb: 139, 92, 246;
    }
    
    .menu-item.orange {
        --item-color-1: #f59e0b;
        --item-color-2: #d97706;
        --item-rgb: 245, 158, 11;
    }
    
    .menu-item.pink {
        --item-color-1: #ec4899;
        --item-color-2: #db2777;
        --item-rgb: 236, 72, 153;
    }
    
    /* Container */
    .dashboard-container {
        max-width: 1400px;
        margin-left: 300px;
        padding: 2rem;
    }
    
    /* Header */
    .page-header {
        margin-bottom: 2rem;
    }
    
    .page-title {
        font-size: 2.5rem;
        font-weight: 900;
        background: linear-gradient(135deg, white, rgba(255, 255, 255, 0.8));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 0.5rem;
    }
    
    .page-subtitle {
        color: rgba(255, 255, 255, 0.8);
        font-size: 1.125rem;
    }
    
    /* Mobile Styles */
    @media (max-width: 992px) {
        .sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        
        .sidebar.active {
            transform: translateX(0);
        }
        
        .dashboard-container {
            margin-left: 0;
        }
    }
    
    .mobile-menu-toggle {
        display: none;
        position: fixed;
        top: 1rem;
        left: 1rem;
        z-index: 1001;
        background: white;
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 12px;
        font-size: 1.5rem;
        color: var(--primary);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        cursor: pointer;
    }
    
    @media (max-width: 992px) {
        .mobile-menu-toggle {
            display: block;
        }
    }
</style>
