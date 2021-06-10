<?php
class APP__MemberRepository {
  public function getForPrintMemberByLoginIdAndLoginPw(string $loginId, string $loginPw): array|null {
    $sql = DB__secSql();
    $sql->add("SELECT *");
    $sql->add("FROM `member` AS M");
    $sql->add("WHERE M.loginId = ?", $loginId);
    $sql->add("AND M.loginPw = ?", $loginPw);
    
    return DB__getRow($sql);
  }

  public function getForPrintMemberByLoginId(string $loginId): array|null {
    $sql = DB__secSql();
    $sql->add("SELECT *");
    $sql->add("FROM `member` AS M");
    $sql->add("WHERE M.loginId = ?", $loginId);
        
    return DB__getRow($sql);
  }

  public function getForPrintMemberById(int $id): array|null {
    $sql = DB__secSql();
    $sql->add("SELECT M.*");
    $sql->add("FROM `member` AS M");
    $sql->add("WHERE M.id = ?", $id);
    return DB__getRow($sql);
  }

  public function join(string $loginId, string $loginPw, string $name, string $nickname, string $cellphoneNo, string $email): int {
    $sql = DB__secSql();
    $sql->add("INSERT INTO member");
    $sql->add("SET regDate = NOW()");
    $sql->add(", updateDate = NOW()");
    $sql->add(", loginId = ?", $loginId);
    $sql->add(", loginPw = ?", $loginPw);
    $sql->add(", name = ?", $name);
    $sql->add(", nickname = ?", $nickname);
    $sql->add(", cellphoneNo = ?", $cellphoneNo);
    $sql->add(", email = ?", $email);

    $id = DB__insert($sql);
    
    return $id;
    
  }

  public function memberModify(int $id, string $loginId, string $loginPw, string $name, string $nickname, string $cellphoneNo, string $email) {
    $sql = DB__secSql();
    $sql->add("UPDATE member");    
    $sql->add("SET updateDate = NOW()");
    $sql->add(", loginId = ?", $loginId);
    $sql->add(", loginPw = ?", $loginPw);
    $sql->add(", name = ?", $name);
    $sql->add(", nickname = ?", $nickname);
    $sql->add(", cellphoneNo = ?", $cellphoneNo);
    $sql->add(", email = ?", $email);
    $sql->add("WHERE id = ?", $id);
    
    $id = DB__update($sql);  
    
  }
}