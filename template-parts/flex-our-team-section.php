<!-- team-section start-->
<section class="team-section">
    <div class="container">
        <div class="title_block">
             <h2>Our <span>Team</span> </h2>
        </div>
        <div class="team-grid">
             <!-- Team Member Card with Before/After Slider -->
            <div class="team-card-box">
                <div class="team-card">
                    <div class="member-image has-slider">
                        <div class="image-slider">
                            <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/uploads/2025/04/team-member-1.png" alt="After" class="after-image">
                            <div class="before-image" style="background-image: url('https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/uploads/2025/03/colin.png');"> </div>
                            <div class="slider-handle"></div>
                            <button class="click-me-btn">Click me</button>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4 class="member-name">Colin</h4>
                        <p class="member-role">Booth Boss</p>
                    </div>
                </div>
            </div>
            <!-- Team Member Card without Slider -->
            <div class="team-card-box">
                <div class="team-card">
                    <div class="member-image">
                        <div class="image-slider">
                            <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/uploads/2025/04/team-member-2.png" alt="Team Member Name">
                        </div>
                    </div>
                    <div class="member-info">
                        <h4 class="member-name">MJ</h4>
                        <p class="member-role">Design & Content Wizard</p>
                    </div>
                </div>
            </div>
            <div class="team-card-box">
                <div class="team-card">
                    <div class="member-image">
                        <div class="image-slider">
                            <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/uploads/2025/04/team-member-3.png" alt="Team Member Name">
                        </div>
                    </div>
                    <div class="member-info">
                        <h4 class="member-name">Joe</h4>
                        <p class="member-role">Technical Innovation</p>
                    </div>
                </div>
            </div>
            <div class="team-card-box">
                <div class="team-card">
                    <div class="member-image">
                        <div class="image-slider">
                            <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/uploads/2025/04/team-member-4.png" alt="Team Member Name">
                        </div>
                    </div>
                    <div class="member-info">
                        <h4 class="member-name">Ellan</h4>
                        <p class="member-role">Customer Care</p>
                    </div>
                </div>
            </div>
            <div class="team-card-box">
                <div class="team-card">
                    <div class="member-image">
                        <div class="image-slider">
                            <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/uploads/2025/04/team-member-5.png" alt="Team Member Name">
                        </div>
                    </div>
                    <div class="member-info">
                        <h4 class="member-name">Don</h4>
                        <p class="member-role">Financial Flight Controller</p>
                    </div>
                </div>
            </div>
            <div class="team-card-box">
                <div class="team-card">
                    <div class="member-image">
                        <div class="image-slider">
                            <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/uploads/2025/03/marjorie.png" alt="Team Member Name">
                        </div>
                    </div>
                    <div class="member-info">
                        <h4 class="member-name">Emily</h4>
                        <p class="member-role">Event Department</p>
                    </div>
                </div>
            </div>
            <div class="team-card-box">
                <div class="team-card">
                    <div class="member-image">
                        <div class="image-slider">
                            <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/uploads/2025/04/team-member-7.png" alt="Team Member Name">
                        </div>
                    </div>
                    <div class="member-info">
                        <h4 class="member-name">Team Member</h4>
                        <p class="member-role">Title</p>
                    </div>
                </div>
            </div>
            <div class="team-card-box">
                <div class="team-card">
                    <div class="member-image">
                        <div class="image-slider">
                            <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/uploads/2025/04/team-member-8.png" alt="Team Member Name">
                        </div>
                    </div>
                    <div class="member-info">
                        <h4 class="member-name">Team Member</h4>
                        <p class="member-role">Title</p>
                    </div>
                </div>
            </div>
            <div class="team-card-box">
                <div class="team-card">
                    <div class="member-image">
                        <div class="image-slider">
                            <img src="https://dddemo.net/wordpress/2025/adeptphotobooths/wp-content/uploads/2025/04/team-member-9.png" alt="Team Member Name">
                        </div>
                    </div>
                    <div class="member-info">
                        <h4 class="member-name">Team Member</h4>
                        <p class="member-role">Title</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-section End-->

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const sliders = document.querySelectorAll('.image-slider');
    
    // Handle Click Me buttons
    document.querySelectorAll('.click-me-btn').forEach(button => {
        button.addEventListener('click', function() {
            const slider = this.closest('.member-image').querySelector('.image-slider');
            slider.classList.add('active');
            this.classList.add('hidden');
        });
    });

    sliders.forEach(slider => {
        const beforeImage = slider.querySelector('.before-image');
        const sliderHandle = slider.querySelector('.slider-handle');
        let isResizing = false;

        // Mouse events
        slider.addEventListener('mousedown', startResizing);
        document.addEventListener('mousemove', resize);
        document.addEventListener('mouseup', stopResizing);

        // Touch events
        slider.addEventListener('touchstart', startResizing);
        document.addEventListener('touchmove', resize);
        document.addEventListener('touchend', stopResizing);

        function startResizing(e) {
            if (!slider.classList.contains('active')) return;
            isResizing = true;
            slider.style.cursor = 'grabbing';
        }

        function stopResizing(e) {
            isResizing = false;
            slider.style.cursor = 'grab';
        }

        function resize(e) {
            if (!isResizing) return;
            
            e.preventDefault();
            const sliderRect = slider.getBoundingClientRect();
            let x = (e.type === 'mousemove') 
                ? e.clientX 
                : e.touches[0].clientX;
            
            x = Math.max(sliderRect.left, Math.min(x, sliderRect.right));
            
            const percentage = ((x - sliderRect.left) / sliderRect.width) * 100;
            
            beforeImage.style.width = `${percentage}%`;
            sliderHandle.style.left = `${percentage}%`;
        }
    });
});
</script>