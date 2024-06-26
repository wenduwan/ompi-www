diff -ur openmpi-1.5.5rc2r25906/opal/asm/base/MIPS.asm openmpi-1.5.5rc2r25906m/opal/asm/base/MIPS.asm
--- openmpi-1.5.5rc2r25906/opal/asm/base/MIPS.asm	2012-02-10 21:16:29.000000000 -0600
+++ openmpi-1.5.5rc2r25906m/opal/asm/base/MIPS.asm	2012-02-14 16:16:26.948085714 -0600
@@ -34,11 +34,10 @@
 	sc     $2, 0($4)         
 	beqz   $2, retry1
 done1:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_32)
 
 
@@ -52,11 +51,10 @@
 	beqz   $2, retry2   
 done2:                 
 	sync
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_32)
 
 	
@@ -70,16 +68,15 @@
 	sc     $2, 0($4)         
 	beqz   $2, retry3   
 done3:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_32)
 	
 	
 LEAF(opal_atomic_cmpset_64)
-		.set noreorder        
+	.set noreorder        
 retry4:                
 	lld    $3, 0($4)         
 	bne    $3, $5, done4   
@@ -87,11 +84,10 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry4   
 done4:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_64)
 
 
@@ -104,11 +100,11 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry5   
 done5:                 
-	.set reorder          
 	sync
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_64)
 
 
@@ -122,9 +118,8 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry6   
 done6:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_64)
diff -ur openmpi-1.5.5rc2r25906/opal/asm/generated/atomic-mips-irix.s openmpi-1.5.5rc2r25906m/opal/asm/generated/atomic-mips-irix.s
--- openmpi-1.5.5rc2r25906/opal/asm/generated/atomic-mips-irix.s	2012-02-10 21:25:44.000000000 -0600
+++ openmpi-1.5.5rc2r25906m/opal/asm/generated/atomic-mips-irix.s	2012-02-14 16:29:55.140085838 -0600
@@ -33,11 +33,10 @@
 	sc     $2, 0($4)         
 	beqz   $2, retry1
 done1:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_32)
 
 
@@ -51,11 +50,10 @@
 	beqz   $2, retry2   
 done2:                 
 	sync
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_32)
 
 	
@@ -69,16 +67,15 @@
 	sc     $2, 0($4)         
 	beqz   $2, retry3   
 done3:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_32)
 	
 	
 LEAF(opal_atomic_cmpset_64)
-		.set noreorder        
+	.set noreorder        
 retry4:                
 	lld    $3, 0($4)         
 	bne    $3, $5, done4   
@@ -86,11 +83,10 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry4   
 done4:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_64)
 
 
@@ -103,11 +99,11 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry5   
 done5:                 
-	.set reorder          
 	sync
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_64)
 
 
@@ -121,9 +117,8 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry6   
 done6:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_64)
diff -ur openmpi-1.5.5rc2r25906/opal/asm/generated/atomic-mips64el.s openmpi-1.5.5rc2r25906m/opal/asm/generated/atomic-mips64el.s
--- openmpi-1.5.5rc2r25906/opal/asm/generated/atomic-mips64el.s	2012-02-10 21:25:44.000000000 -0600
+++ openmpi-1.5.5rc2r25906m/opal/asm/generated/atomic-mips64el.s	2012-02-14 16:30:00.032085988 -0600
@@ -33,11 +33,10 @@
 	sc     $2, 0($4)         
 	beqz   $2, retry1
 done1:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_32)
 
 
@@ -51,11 +50,10 @@
 	beqz   $2, retry2   
 done2:                 
 	sync
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_32)
 
 	
@@ -69,16 +67,15 @@
 	sc     $2, 0($4)         
 	beqz   $2, retry3   
 done3:                 
-	.set reorder          
-
 	xor	$3,$3,$5
 	j	ra
 	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_32)
 	
 	
 LEAF(opal_atomic_cmpset_64)
-		.set noreorder        
+	.set noreorder        
 retry4:                
 	lld    $3, 0($4)         
 	bne    $3, $5, done4   
@@ -86,11 +83,10 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry4   
 done4:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_64)
 
 
@@ -103,11 +99,11 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry5   
 done5:                 
-	.set reorder          
 	sync
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_acq_64)
 
 
@@ -121,9 +117,8 @@
 	scd    $2, 0($4)         
 	beqz   $2, retry6   
 done6:                 
-	.set reorder          
-
-	xor	$4,$3,$5
+	xor	$3,$3,$5
 	j	ra
-	sltu	$3,$4,1
+	sltu	$2,$3,1
+	.set reorder          
 END(opal_atomic_cmpset_rel_64)

