<?php require("../../includes/header.php"); ?><h1>BOB Gaming</h1><div class="content">

<p>
<h2>Points:10</h2>
</p>
<p>
Very long ago a group of scholars formed a secret society by the name of Brotherhood of Brom. They went underground so that they could </p>
<p>continue their scientific research away from the eyes of the church that demanded confinement of all scientific pursuits, for the church </p>
<p>saw them as acts of devilry brought upon by curiosity. Scientists were often rounded up in the name of being evil witches and wizards and </p>
<p>burnt at the stake...or sometimes killed by the church assassins. To maintain their secrecy, the Brotherhood of Brom used passwords. </p>
<p>However they did not sick to a single password, instead they used mirrored palindromes. The more the number of such words a member could </p>
<p>come up with, the more intelligent he seemed to be...</p>
<p>A regular palindrome is a string of numbers or letters that is the same forward as backward. For example, the string "ABCDEDCBA" is a </p>
<p>palindrome because it is the same when the string is read from left to right as when the string is read from right to left.<br />
A mirrored string is a string for which when each of the elements of the string is changed to its reverse (if it has a reverse) and the </p>
<p>string is read backwards the result is the same as the original string. For example, the string "3AIAE" is a mirrored string because "A" </p>
<p>and "I" are their own reverses, and "3" and "E" are each others' reverses.</p>
<p>A mirrored palindrome is a string that meets the criteria of a regular palindrome and the criteria of a mirrored string. The string </p>
<p>"ATOYOTA" is a mirrored palindrome because if the string is read backwards, the string is the same as the original and because if each of </p>
<p>the characters is replaced by its reverse and the result is read backwards, the result is the same as the original string. Of course, "A", </p>
<p>"T", "O", and "Y" are all their own reverses.</p>
<p>A list of all valid characters and their reverses is as follows.</p>
<pre>
Char   Rev    Char     Rev    Char   Reverse 
A 		A 	M 		M 	Y 		Y 
B 			N	 		Z	 	5 
C	 		O	 	O	1	 	1 
D	 		P	 		2	 	S 
E 		3	Q		        3	 	E 
F	 		R	 		4	 	
G	 		S	 	2 	5	 	Z 
H	 	H 	T	 	T	6 	
I	 	I	U	 	U	7 	
J	 	L	V	 	V	8	 	8 
K 		W	W	 	        9 	
L	 	J 	X	 	X 		

</pre><p><br/></br/></p>
<p>*Note* that O (zero) and 0 (the letter) are considered the same characterand therefore *ONLY* the letter "0" is a valid character.</p>
<p>It turns out that your great great great great grandfather was a member of this society. Wishing to emulate their genius, you want to use the same passwords for your lan gaming events in the modern day. You must design a program that checks whether a given string can act as password or not.</p>
<h3>
Input:</h3>
<p>
Input consists of strings (one per line) each of which will consist  valid characters(&lt;100). There will be no invalid  characters in any of the strings. Last line contains # represents end of inputs. </p>
<h3>
Output:</h3>
<p><pre>
Output will be a string:
"notpalindrome" --if the string is not a palindrome and is not a mirrored string 
"regularpalindrome"-- if the string is a palindrome and is not a mirrored string 
"mirroredstring" --if the string is not a palindrome and is a mirrored string 
"mirroredpalindrome"-- if the string is a palindrome and is a mirrored string 
</pre></p>
<p>
<h3>
Example:
</h3></p>

<p><b>Input:</b></p>
<pre>
NOTAPALINDROME 
ISAPALINILAPASI 
2A3MEAS 
ATOYOTA
#
</pre><p><b><br />
Output:</b></p>
<pre>
notpalindrome
regularpalindrome
mirroredstring
mirroredpalindrome
</pre><h3>
</h3>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ankitbabbar">ankitbabbar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>