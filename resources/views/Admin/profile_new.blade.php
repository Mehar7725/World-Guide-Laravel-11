<?php
require_once 'check_login.php';
checkLogin();
require_once 'config/database.php';

// Get user data
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <title>HUD | <?php echo htmlspecialchars($user['full_name']); ?>'s Profile</title>
    <!-- ... rest of head section ... -->
</head>
<body>
    <div id="app" class="app">
        <!-- ... header and sidebar ... -->
        
        <!-- BEGIN profile-sidebar -->
        <div class="profile-sidebar">
            <div class="desktop-sticky-top">
                <div class="profile-img">
                    <img src="<?php echo htmlspecialchars($user['profile_image']); ?>" alt="Profile">
                </div>
                
                <!-- profile info -->
                <h4><?php echo htmlspecialchars($user['full_name']); ?></h4>
                <div class="mb-3 text-inverse text-opacity-50 fw-bold mt-n2">
                    @<?php echo htmlspecialchars($user['username']); ?>
                </div>
                <p><?php echo htmlspecialchars($user['bio']); ?></p>
                
                <?php if($user['location']): ?>
                <div class="mb-1">
                    <i class="fa fa-map-marker-alt fa-fw text-inverse text-opacity-50"></i> 
                    <?php echo htmlspecialchars($user['location']); ?>
                </div>
                <?php endif; ?>
                
                <?php if($user['website']): ?>
                <div class="mb-3">
                    <i class="fa fa-link fa-fw text-inverse text-opacity-50"></i> 
                    <a href="<?php echo htmlspecialchars($user['website']); ?>" target="_blank">
                        <?php echo htmlspecialchars($user['website']); ?>
                    </a>
                </div>
                <?php endif; ?>

                <!-- ... rest of sidebar ... -->
            </div>
        </div>
        
        <!-- BEGIN profile-content -->
        <div class="profile-content">
            <ul class="profile-tab nav nav-tabs nav-tabs-v2">
                <li class="nav-item">
                    <a href="#profile-post" class="nav-link active" data-bs-toggle="tab">
                        <div class="nav-field">Posts</div>
                        <div class="nav-value"><?php echo $user['posts_count']; ?></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#profile-followers" class="nav-link" data-bs-toggle="tab">
                        <div class="nav-field">Followers</div>
                        <div class="nav-value"><?php echo $user['followers_count']; ?></div>
                    </a>
                </li>
                <!-- ... other tabs ... -->
            </ul>

            <!-- BEGIN tab-content -->
            <div class="tab-content">
                <!-- Posts Tab -->
                <div class="tab-pane fade show active" id="profile-post">
                    <?php
                    // Get user posts
                    $posts_query = "SELECT p.*, COUNT(l.id) as likes_count 
                                  FROM posts p 
                                  LEFT JOIN post_likes l ON p.id = l.post_id 
                                  WHERE p.user_id = ? 
                                  GROUP BY p.id 
                                  ORDER BY p.created_at DESC";
                    $stmt = $conn->prepare($posts_query);
                    $stmt->bind_param("i", $user_id);
                    $stmt->execute();
                    $posts = $stmt->get_result();

                    while($post = $posts->fetch_assoc()):
                    ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <!-- post header -->
                            <div class="d-flex align-items-center mb-3">
                                <a href="#"><img src="<?php echo htmlspecialchars($user['profile_image']); ?>" alt="" width="50" class="rounded-circle"></a>
                                <div class="flex-fill ps-2">
                                    <div class="fw-bold">
                                        <a href="#" class="text-decoration-none"><?php echo htmlspecialchars($user['full_name']); ?></a>
                                        <?php if($post['location']): ?>
                                            at <a href="#" class="text-decoration-none"><?php echo htmlspecialchars($post['location']); ?></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="small text-inverse text-opacity-50">
                                        <?php echo date('M d', strtotime($post['created_at'])); ?>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- post content -->
                            <p><?php echo htmlspecialchars($post['content']); ?></p>
                            
                            <?php if($post['images']): ?>
                            <div class="profile-img-list">
                                <!-- Display post images -->
                                <?php
                                $images = json_decode($post['images'], true);
                                foreach($images as $index => $image):
                                    $class = $index === 0 ? 'main' : '';
                                ?>
                                <div class="profile-img-list-item <?php echo $class; ?>">
                                    <a href="<?php echo htmlspecialchars($image); ?>" data-lity class="profile-img-list-link">
                                        <span class="profile-img-content" style="background-image: url(<?php echo htmlspecialchars($image); ?>)"></span>
                                    </a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>

                            <!-- ... post actions ... -->
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                
                <!-- ... other tabs content ... -->
            </div>
        </div>
    </div>
    
    <!-- ... scripts ... -->
</body>
</html>