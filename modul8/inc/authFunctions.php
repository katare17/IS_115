<?php 

    function erBrukerLåst($user) {
        if(!empty($user->LockedUntil)) {
            $now = new DateTime("now");
            $lockedUntil = new DateTime($user->LockedUntil);

            if($now < $lockedUntil) {
                return true;
            }
        } return false;
    }

    function registrerFeiletInnlogging(PDO $pdo, $userID) {
        $sql = "
        UPDATE users
        SET FailedAttempts = FailedAttempts + 1,
            LastFailedAttempt = NOW()
        WHERE UserID = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $userID]);

        $sql = "SELECT FailedAttempts FROM users WHERE UserID = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $userID]);
        $attempts = $stmt->fetchColumn();

        if($attempts >= 3) {
            $sql = "
            UPDATE users
            SET LockedUntil = DATE_ADD(NOW(), INTERVAL 1 HOUR)
            WHERE UserID = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $userID]);
        }
        return $attempts;
    }

    function nullstillFeilforsøk(PDO $pdo, $userID) {
        $sql = "
        UPDATE users
        SET FailedAttempts = 0,
            LockedUntil = NULL,
            LastFailedAttempt = NULL
        WHERE UserID = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $userID]);
    }
    ?>