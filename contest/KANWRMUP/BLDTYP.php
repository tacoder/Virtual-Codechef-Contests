<?php require("../../includes/header.php"); ?><h1>Blood Type</h1><div class="content">

<p>Every person's blood has 2 markers called ABO alleles. Each of the markers is </p>
<p>represented by one of three letters: A, B, or O. This gives six possible combinations of </p>
<p>these alleles that a person can have, each of them resulting in a particular ABO blood </p>
<p>type for that person.</p>
<table>
<tr>
<td><b>Combination</b></td>
<td><b>ABO Blood Type</b></td>
</tr>
<tr>
<td>AA</td>
<td>A</td>
</tr>
<tr>
<td>AB</td>
<td>AB</td>
</tr>
<tr>
<td>AO</td>
<td>A</td>
</tr>
<tr>
<td>BB</td>
<td>B</td>
</tr>
<tr>
<td>BO</td>
<td>B</td>
</tr>
<tr>
<td>OO</td>
<td>O</td>
</tr>
</table>
<p>Likewise, every person has two alleles for the blood Rh factor, represented by the </p>
<p>characters + and -. Someone who is "Rh positive" or "Rh+" has at least one + allele, but </p>
<p>could have two. Someone who is "Rh negative" always has two - alleles.</p>
<p>The blood type of a person is a combination of ABO blood type and Rh factor. The blood </p>
<p>type is written by suffixing the ABO blood type with the + or - representing the Rh </p>
<p>factor. Examples include A+, AB-, and O-.</p>
<p>Blood types are inherited: each biological parent donates one ABO allele (randomly chosen </p>
<p>from their two) and one Rh factor allele to their child. Therefore 2 ABO alleles and 2 Rh </p>
<p>factor alleles of the parents determine the child's blood type. For example, if both </p>
<p>parents of a child have blood type A-, then the child could have either type A- or type O- </p>
<p>blood. A child of parents with blood types A+ and B+ could have any blood type.</p>
<p>In this problem, you will be given the blood type of either both parents or one parent and </p>
<p>a child; you will then determine the (possibly empty) set of blood types that might </p>
<p>characterize the child or the other parent. </p>
<p>Note: an uppercase letter "Oh" is used in this problem to denote blood types, not a digit </p>
<p>(zero).</p>
<h3>Input</h3>
<p>The input consists of multiple test cases. Each test case is on a single line in the </p>
<p>format: the blood type of one parent, the blood type of the other parent, and finally the </p>
<p>blood type of the child, except that the blood type of one parent or the child will be </p>
<p>replaced by a question mark. To improve readability, white-space may be included anywhere </p>
<p>on the line except inside a single blood type specification.<br />
The last test case is followed by a line containing the letters E, N, and D separated by </p>
<p>white space.</p>
<h3>Output</h3>
<p>For each test case in the input, print the case number (beginning with 1) and the blood </p>
<p>type of the parents and the child. If no blood type for a parent is possible, print </p>
<p>"IMPOSSIBLE". If multiple blood types for parents or child are possible, print all </p>
<p>possible values in a comma-separated list enclosed in curly braces. The order of the blood </p>
<p>types inside the curly braces does not matter.<br />
The sample output illustrates multiple output formats. Your output format should be </p>
<p>similar.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
O+ O- ?
O+ ? O-
AB- AB+ ?
AB+ ? O+
E N D

<b>Output:</b>
Case 1: O+ O- {O+, O-}
Case 2: O+ {A-, A+, B-, B+, O-, O+} O-
Case 3: AB- AB+ {A+, A-, B+, B-, AB+, AB-}
Case 4: AB+ IMPOSSIBLE O+
</pre>    </div><table>
<tr>
<td><b>Combination</b></td>
<td><b>ABO Blood Type</b></td>
</tr>
<tr>
<td>AA</td>
<td>A</td>
</tr>
<tr>
<td>AB</td>
<td>AB</td>
</tr>
<tr>
<td>AO</td>
<td>A</td>
</tr>
<tr>
<td>BB</td>
<td>B</td>
</tr>
<tr>
<td>BO</td>
<td>B</td>
</tr>
<tr>
<td>OO</td>
<td>O</td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2011</td>
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