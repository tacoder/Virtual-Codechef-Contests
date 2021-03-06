<?php require("../../includes/header.php"); ?><h1>Chef Protection Plan</h1><div class="content">

<p>Chef's restaurants are under attack. His competitors in disguise of customers or employees visit his restaurants and create trouble. Chef is extremely agitated. When he calms down he decides to beef up security. The plan is codenamed "Chef Protection Plan". Under this plan, everything is checked before being entered into restaurants. After much thinking it was decided to check for identification numbers of cooks, customers, delivery van etc. Various types of identification numbers to be checked are : "Security number", "Employee number", "Roll number" etc.</p>
<p>Chef has restaurants all over the world. Different places have different <b>format</b>s for a given <b>identification number</b> and there are too many types of identification numbers. Thus Chef needs to specify the format for all the identification numbers in a convenient way. The format should also be consistent because the code monkeys who will be automating the process are not very careful with specifications. An identification number is composed of uppercase letters and digits and hyphen ('-') only. Thus instead of calling it an identification number, we will call it an <b>ID string</b> henceforth.<br />The rules used by Chef for specifying a <b>format of an ID string</b> are (formats are underlined)-</p>
<ul>
<li>A portion of string can be a fixed string, i.e. matches itself exactly only. Like <span style="text-decoration: underline;">XYZ</span>, <span style="text-decoration: underline;">A321</span>, <span style="text-decoration: underline;">D-409</span> etc.</li>
<li>The specification contains keywords in lowercase to describe the ID string. This is the list of keywords, along with their meaning-<br /> - <b>to</b> : is used for specifying a <i>range</i> from a letter to letter or a digit to digit. Like <span style="text-decoration: underline;">3 to 8</span>, <span style="text-decoration: underline;">D to Z</span> etc. Note that ranges of numbers cannot be specified using <b>to</b>. <span style="text-decoration: underline;">1 to 1000</span> is <b>invalid</b> because 1000 is not a digit but a number. Also <span style="text-decoration: underline;">D to A</span> is invalid because the left-hand-side should not be greater than the right-hand-side.<br /> - <b>or</b> : is used to specify a list of exclusive options. Like <span style="text-decoration: underline;">XYZ or Y2K</span>, <span style="text-decoration: underline;">1 or 3 or 55</span> etc.<br /> - <b>times</b> : is used to specify the number of times (<b>N</b>) a portion of the format string is to be repeated. Like <span style="text-decoration: underline;">A 3 times</span>, <span style="text-decoration: underline;">S01 12 times</span> etc. The first example can also be specified simply as <span style="text-decoration: underline;">AAA</span> instead. Thus as you will see there are multiple ways to specify same type of ID strings. Also the portion (to be repeated) is smallest meaningful expression. Like in <span style="text-decoration: underline;">A B 2 times</span>, 'B' is repeated 2 times and not 'AB'.<br /> - <b>optional</b> : is used to specify that the string portion is optional, i.e can be present or absent. Like <span style="text-decoration: underline;">LP optional</span>, <span style="text-decoration: underline;">12KL optional</span> etc. Also the portion (to be made optional) is smallest meaningful expression. Like in <span style="text-decoration: underline;">A B optional</span>, 'B' is optional and not 'AB'.<br /> - <b>digit</b> : is used to specify any digit. It is same as writing <span style="text-decoration: underline;">0 to 9</span> or <span style="text-decoration: underline;">0 or 1 or 2 or 3 or 4 or 5 or 6 or 7 or 8 or 9</span> in the rule.<br /> - <b>letter</b> : is used to specify any letter. It is same as writing <span style="text-decoration: underline;">A to Z</span> or <span style="text-decoration: underline;">A or B or C...</span> in the rule.<br /> - <b>digits</b> : is used to specify the number of times any digit may be repeated. It can be specified in two ways-<br /> -- <b>exactly N digits</b>, where <b>N</b> is an integer. Like <span style="text-decoration: underline;">exactly 3 digits</span> matches 007 and 987 but not 5 or 42<br /> -- <b>upto N digits</b>, where <b>N</b> is an integer. Like <span style="text-decoration: underline;">upto 3 digits</span> matches 7, 42 and 987 but not 4444. This rule can also match 0 digits. See the examples below.<br /> - <b>letters</b> : is used to specify the number of times any letter may be repeated. It can be specified in two ways-<br /> -- <b>exactly N letters</b>, where <b>N</b> is an integer. Like <span style="text-decoration: underline;">exactly 3 letters</span> matches ABC and CPP but not Z or VG<br /> -- <b>upto N letters</b>, where <b>N</b> is an integer. Like <span style="text-decoration: underline;">upto 3 letters</span> matches A, BC and DEF but not PQRS. This rule can also match 0 letters. </li>
<li>The above keywords can be used to describe a portion of the format string. By writing such "sub-formats" side by side we can describe entire ID string. Like <span style="text-decoration: underline;">3 to 8 XYZ or Y2K</span> matches 4XYZ, 7Y2K etc. but not XYZ, Y2K5 etc.</li>
<li>The sub-formats can be nested as well. Like <span style="text-decoration: underline;">3 to 8 or Y2K</span>, <span style="text-decoration: underline;">digit 2 times</span>. Notice that second example is equivalent to <span style="text-decoration: underline;">exactly 2 digits</span>.</li>
<li>Parentheses can be used to enforce grouping in formats or to provide clarity. Like <span style="text-decoration: underline;">XYZ 12 or 34 optional</span> makes 34 optional. Instead if you want '12 or 34' to be optional, you can use parentheses : <span style="text-decoration: underline;">XYZ (12 or 34) optional</span>. Parenthesis can also be used when they are not really required. Like <span style="text-decoration: underline;">((XYZ)) 234</span> is equivalent to <span style="text-decoration: underline;">XYZ 234</span>, which can also be written as <span style="text-decoration: underline;">XYZ234</span>. Note that <span style="text-decoration: underline;">()</span> is invalid, because Chef believes empty parenthesis are useless.</li>
<li>Spaces are used to separate keywords, strings, numbers, digits and letters from each other. Like <span style="text-decoration: underline;">ABCoptional</span> is invalid, but <span style="text-decoration: underline;">ABC optional</span> is valid. Spaces are very useful in breaking apart strings, like <span style="text-decoration: underline;">AB CD 2 times</span>. Parenthesis can also be used for separation, like <span style="text-decoration: underline;">AB(CD)2 times</span> is same as the last format. But <span style="text-decoration: underline;">A(to)B</span> is invalid as parenthesis enforce grouping as well and <span style="text-decoration: underline;">(to)</span> alone is invalid.</li>
</ul>
<p>Now Chef is lousy at writing formats. Like he can add unnecessary spaces around words. He won't add stray symbols though. Also being a human he can sometimes end up writing erroneous formats -- the ones which do not conform to his rules. Like <span style="text-decoration: underline;">optional ABC</span>, <span style="text-decoration: underline;">1 to A</span> etc. are invalid formats. <b>But he would never use symbols apart from lowercase/uppercase letter, digits, parenthesis, hyphen(-) and space.</b></p>
<h3>Input</h3>
<p>First line contains a single integer <b>T</b>, which specifies the number of test cases. First line of each test case contains <b>F</b>, the format of an ID string. The next line contains an integer <b>Q</b>. Then the next Q lines contain <b>IDS</b>, one ID string on each line.</p>
<h3>Output</h3>
<p>For each ID string output "Valid-ID" if the ID string conforms to the format, "Invalid-ID" otherwise. You need to ignore the queries (ID strings) for the following type of formats-</p>
<p>1. If the format is inconsistent with the rules, output "Format does not conform".</p>
<p>2. If the format is consistent with rules but can match ID strings which exceed the constraint imposed on <b>IDS</b> (possible length of IDS &gt; 2000), output "Matches too long ID".</p>
<p>3. If <b>N</b> (used in <span style="text-decoration: underline;">X N times</span>, <span style="text-decoration: underline;">exactly N digits</span> etc.) is less than 2 or greater than 12, output "Format does not conform"</p>
<p>After each test case output an empty line.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>length of F</b> ≤ 1000</li>
<li>0 ≤ <b>Q</b> ≤ 1000</li>
<li>1 ≤ <b>length of IDS</b> ≤ 2000</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
  A to D - 1 to 4 exactly 2 digits  
5
D-409
A-413
CD-123
M987
B-1
1 to 9 digit optional    digit optional -   CO or EC or IT - 09
4
326-CO-09
123-EC-09
1-IT-09
123-EC-08
X (YZ 1 optional  A413)     optional
3
X
XYZA413
XYZ1A413
A to G upto 2 digits (1 or 3 or 5) 2 times  
4
A15
G633
a15
B5
12times
1
123456789012

<b>Output:</b>
Valid-ID
Valid-ID
Invalid-ID
Invalid-ID
Invalid-ID

Valid-ID
Valid-ID
Valid-ID
Invalid-ID

Valid-ID
Valid-ID
Valid-ID

Valid-ID
Valid-ID
Invalid-ID
Invalid-ID

Format does not conform

</pre><h3>Notes</h3>
<ul>
<li>"or" has the least precedence among all keywords. For example <span style="text-decoration: underline;">1 or 2 3 times</span> is interpreted as <span style="text-decoration: underline;">1 or (2 3 times)</span> instead of <span style="text-decoration: underline;">(1 or 2) 3 times</span>.</li>
<li>"optional" and "times" have equal precedence, which is lower than all other keywords but higher than "or". Like  <span style="text-decoration: underline;">1 to 3 4 times</span> is interpreted as <span style="text-decoration: underline;">(1 to 3) 4 times</span>.</li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vinayak garg">vinayak garg</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-01-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>