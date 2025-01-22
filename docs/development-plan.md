**Project Phases and Deployment Plan for itSTARTS** 🏃‍♂️💨

---

### **Phase 1: Foundation**
**Objective**: Build the core structure of the application and implement basic role-based functionality.

**Features**:
1. **User Authentication**:
   - Role-based access for homeschoolers, parents, and tutors.
2. **Tutor Directory**:
   - Parents can view tutor profiles.
   - Tutors can create and edit their profiles (e.g., qualifications, availability).
3. **Homeschooler Resource Management**:
   - Add, edit, and delete saved resources (URLs, videos).
4. **Basic UI**:
   - Separate dashboards for homeschoolers, parents, and tutors.

---

### **Phase 2: Core Features**
**Objective**: Implement essential features for meaningful interaction.

**Features**:
1. **Weekly Reflections for Homeschoolers**:
   - Add reflections with tags: **Private** (personal) or **Public** (learning-related).
   - Tutors can view and comment on public reflections.
2. **Goal Setting for Homeschoolers**:
   - Create, track, and update personal learning goals.
   - Tutors can view progress.
3. **Parent-Tutor Communication**:
   - Integrate Google Chat for parents to contact tutors.
4. **Student Management for Tutors**:
   - Tutors can list students and link them to parents.

---

### **Phase 3: Advanced Features**
**Objective**: Integrate external tools and enhance system functionality.

**Features**:
1. **Google Calendar Integration**:
   - Homeschoolers and tutors can sync and manage schedules.
2. **Google Classroom Integration**:
   - Homeschoolers can view class schedules directly.
   - Tutors can link their classes to Google Classroom.
3. **To-Do List for Homeschoolers**:
   - Create, edit, and mark tasks as complete.

---

### **Phase 4: Polishing and Expansion**
**Objective**: Refine the system and prepare for deployment.

**Features**:
1. **Progress Tracking**:
   - Tutors and parents can view detailed dashboards for homeschooler progress.
2. **UI/UX Enhancements**:
   - Improve usability and design consistency.
3. **System Testing**:
   - Conduct thorough testing for bugs and usability issues.
   - Gather user feedback and refine features.

---

### **Phase 5: Deployment**
**Objective**: Host the application online for demonstration purposes.

**Steps**:

#### **1. Backend (Laravel) Deployment**
1. **Set Up Hosting**:
   - Log in to Hostinger and access your hosting dashboard.
   - Ensure your hosting plan supports **PHP** and **MySQL**.
2. **Upload Laravel Project**:
   - Zip your Laravel project (excluding the `node_modules` and `vendor` folders).
   - Upload it via the **File Manager** or using **FTP** (e.g., FileZilla).
3. **Install Dependencies**:
   - Use Hostinger’s **SSH Access** to connect to the server.
   - Run the following commands to install dependencies:
     ```bash
     composer install
     php artisan key:generate
     php artisan migrate
     ```
4. **Database Setup**:
   - Create a database via the Hostinger control panel.
   - Update the `.env` file with the database credentials.
5. **Point Domain to Public Folder**:
   - Configure the **public_html** folder to point to Laravel’s `public` directory.
   - Update the `.htaccess` file to redirect all traffic to Laravel’s public folder.

#### **2. Frontend (React) Deployment**
1. **Build the React App**:
   - In your React project, run:
     ```bash
     npm run build
     ```
   - This generates a `build` folder with production-ready files.
2. **Upload Build Files**:
   - Upload the contents of the `build` folder to a subdomain or a separate folder (e.g., `frontend`) on Hostinger.
3. **Connect Backend and Frontend**:
   - Update the API endpoints in your React app to point to your Laravel backend URL.

#### **3. Domain Configuration**
1. **Link Domain to Project**:
   - Go to your Hostinger dashboard and set up the domain to point to the correct folders:
     - Backend: Point to the folder containing Laravel’s `public` directory.
     - Frontend: Point to the folder containing the React `build` files.
2. **SSL Certificate**:
   - Enable SSL for your domain via Hostinger to ensure secure communication.

#### **4. Test Your Application**
- Access your domain in a browser to verify both the frontend and backend are working.
- Test all features to ensure the deployment is successful.
