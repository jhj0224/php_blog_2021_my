<?php
class APP__MemberService {
  private APP__MemberRepository $memberRepository;

  public function __construct() {
    global $App__memberRepository;
    $this->memberRepository = $App__memberRepository;
  }

  public function getForPrintMemberByLoginIdAndLoginPw(string $loginId, string $loginPw): array|null {
    return $this->memberRepository->getForPrintMemberByLoginIdAndLoginPw($loginId, $loginPw);
  }

  public function getForPrintMemberByLoginId(string $loginId): array|null {
    return $this->memberRepository->getForPrintMemberByLoginId($loginId);
  }

  public function getForPrintMemberById(int $id): array|null {
    return $this->memberRepository->getForPrintMemberById($id);
  }
  public function join(string $loginId, string $loginPw, string $name, string $nickname, string $cellphoneNo, string $email): int {
    return $this->memberRepository->join($loginId, $loginPw, $name, $nickname, $cellphoneNo, $email);
  }
  public function memberModify(int $id, string $loginId, string $loginPw, string $name, string $nickname, string $cellphoneNo, string $email) {
    $this->memberRepository->memberModify($id, $loginId, $loginPw, $name, $nickname, $cellphoneNo, $email);
  }
}