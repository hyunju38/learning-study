### Random Functions throwing Exceptions
**Summary:** `random_*()`이 데이터 생성에 실패하면, Exception을 일으킨다.
**Why:** 중요한 변수에 null 값이 들어가는 현상 방지. (보안 이슈)

### Throwable Interface
**Summary:** `Throwable` interface & `Error` class를 도입하여 기존 `BaseException`을 다룰 수 있게 변경
**Why:** `BaseException`과 `Exception`이 서로 다른 class이기 때문에 Exception Handling에 혼동.

### Context Sensitive Lexer
**Summary:** context sensitive lexer가 semi-seserved words를 지원하도록 변경.
**Why:** 예약어와 겹치는 네이밍이 가독성이 높은 경우가 있기 때문.

### Add preg_replace_callback_array function
**Summary:** `preg_replace_callback_array` 추가
**Why:** `preg_replace_callback`가 하나의 callback만 지원하기 때문.

### Reliable User-land CSPRNG
**Summary:** CSPRNG를 지원하는 method 추가
**Why:** PHP에서 지원해주지 않았으며, 다른 몇 가지 대안도 제약사항이 많기 때문.

### Anonymous Class Support
**Summary:** 익명 클래스 지원
**Why:**
1. Mock Object 생성이 간편.
2. scope에 벗어나서 class를 쉽게 사용.
3. 간단한 인터페이스를 따로 구현할 필요가 사라짐.

### Generator Delegation
**Summary:** Generator Delegation(생성자 위임?) 가능
**Why:** Generator에 return 문이 허용되면서 같이 추가 됨.

### Reserve More Type Names in PHP7
int, float, string, bool, true, false, null를 예약?

### Constructor behaviour of internal classes
생성사 정리

### Reclassify E_STRICT notices
기존 몇몇의 E_STRICT를 정리

### Remove PHP4 Constructors
클래스와 같은 이름의 method는 생성자로 인식하지 않음

### Remove the date.timezone warning
date.timezone 경고 제거

새로운 비교 연산자 <=>


### Fix "foreach" behavior
foreach 문법 수정

### Removal of dead SAPIs and extensions
지원되지 않는 SAPIs와 extensions 제거

### jsond
json extention을 jsond로 대체

### Preserve Fractional Part in JSON encode
float에 취약점을 예방하기 위해 JSON encode에 옵션 추가

### Return Type Declarations
function, methods, closure에 return type 추가

### Fast Parameter Parsing API
`zend_parse_parameters` 추가

### Unicode Codepoint Escape Syntax
string에 escape sequence 문법 추가

### Native TLS
TS mode에서 Native TLS?

### Null Coalesce Operator
`??` 문법 추가

### Integer Semantics
integers 연산에 대해 크로스 플랫폼 일관성 향상?

### ZPP Failure on Overflow
integer에 float, NaN이 넘어오면 `zend_parse_parameters`는 fail이 된다.

### Move the phpng branch into master
phpng 코드베이스 포함

### Abstract Syntax Tree
AST 도입. 컴파일 프로세스의 중간 단계?

### Uniform Variable Syntax
variable 문법 정형화

### 64 bit platform improvements for string length and integer
integer와 string이 64 비트를 완전히 지원한다.

### Closure::call
Closure 클래스에 colling bound를 허용하는 method 추가

### Fix list() behavior inconsistency
list() 연산자를 사용/미사용 설정?

### Remove alternative PHP tags
ASP, script tags 제거

### switch.default.multiple
switch문의 다중 defaults를 허용하지 않는다.

### Catchable "call to member function of a non-object"
fatal error를 E_RECOVERABLE로 반환

### Filtered unserialize()
`unserialize()`에 object를 생략하는 옵션 추가

### ICU IntlChar class
IntlChar 클래스에 intl_char_*()이 추가

### Introduce session_start() INI options as array
`session_start()`에 옵션 도입

### Remove hex support in numeric strings
숫자 문자열에서 hex 지원을 제거

### Expectations
BC zero-cost assertions 추가

### Group Use Declarations
namespace 작성 기능 향상

### Exceptions in the engine
engine 내에서 exception을 사용

### Generator Return Expressions
생성자에 return value에 접근하고 명시하는 기능 추가

### Scalar Type Hints v0.5
mixed-mode scalar type system

### Continue output buffering
buffer stack을 출력하자?

### intdiv()
정수 나눗셈 `intdiv()` 추가

### Fix handling of custom session handler return values
false는 failure를 의미

### Turn gc_collect_cycles into function pointer
`gc_collect_cycles` -> function pointer
