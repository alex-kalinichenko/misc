class Solution:
    def numUniqueEmails(self, emails) -> int:
        email_set = set()
        for email in emails:
            # print('email=',email)
            # print('@ idx=', email.find('@'))
            # name = email[:min(email.find('+'), email.find('@'))]
            # print('min idx=', min(email.find('+'), email.find('@')))
            # name = name.replace('.', '')
            # print('name=', name)
            # domain = email[email.find('@'):]
            # print('domain=', domain)
            email_set.add(email[:(min(email.find('+'), email.find('@')) if email.find('+') != -1 else email.find('@'))].replace('.', '') +
                          email[email.find('@'):])
            """  срез адреса до символа который встретиться раньше + или @. Удаление точек +
                            доменная часть после @ как есть"""
            #email_set = name + domain
            print('email=', email)
            print('email_set=', email_set)
        return len(email_set)


# print(Solution().numUniqueEmails(["test.email+alex@leetcode.com",
#                                   "test.e.mail+bob.cathy@leetcode.com",
#                                   "testemail+david@lee.tcode.com"]))
print(Solution().numUniqueEmails(["test.email+alex@leetcode.com", "test.email@leetcode.com"]))