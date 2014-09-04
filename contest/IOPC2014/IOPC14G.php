<?php require("../../includes/header.php"); ?><h1>Copy and Paste</h1><div class="content">
<p>In an exam in IIT Kanpur, the question paper consists of infinite questions. Ram, being a studious guy, aims to attempt infinite questions. In the <strong>i</strong>-th question, Ram answers are worth <strong>R[i]</strong> marks. However, he does not know the answer to all, and instead of thinking about the questions, repeats his answer after every <strong>S</strong> questions, i.e., the answer given by Ram for the <strong>K</strong>-th question is same as the answer for <strong>(K - S)</strong>-th  question and so the marks obtained for question <strong>K</strong> and question <strong>K-S</strong> are also the same.<br /><br /></p>
<p>Shyam, on the other hand, hardly studies and has made up his mind to attempt atmost <strong>N</strong> questions. He plans to copy the answer to these questions from Ram. If Shyam wishes to write answers to all between question <strong>X</strong> and question <strong>Y</strong>, he wants to know the corresponding answers by Ram for all questions between <strong>M</strong> and <strong>M+Y-X</strong>, where <strong>M</strong> is a parameter decided by Shyam. For each answer copied, he would earn same marks as Ram earned for the corresponding answer. If at the end of the exam, Shyam has not attempted any of the <strong>N</strong> questions, he receives zero marks for that question.<br /><br /></p>
<p>Now while correcting Shyam's answer sheet, the teacher wishes to check answers for questions between <strong>A</strong> and <strong>B</strong>. She asks Ram as what would be the maximum marks he would obtain if she checks some continuous questions in between <strong>A</strong> and <strong>B</strong>.<br /><br /></p>
<p>Help Ram in answering these questions and passing the exam.<br /></p>
<h3>Input Format</h3>
<p>First Line contains 3 space separated integers <strong>S N T</strong>.<br /><br />
Next Line Contains <strong>S</strong> space separated integers, representing the marks worth of first <strong>S</strong> answers of Ram, i.e., <strong>i</strong>-th integer represents <strong>R[i]</strong>.<br />
<strong>T</strong> lines follows, containing <strong>T</strong> operations, one per line.<br /><br /><br />
Each operation is either of the two forms <br /><br />
<strong>U X Y M</strong> - To copy Ram's answer from <strong>M</strong> to <strong>M+Y-X</strong>.<br /><br />
<strong>Q A B</strong> - To report the maximum marks that can be obtained on correcting continuous questions between <strong>A</strong> and <strong>B</strong>.<br /><br /></p>
<h3>Output Format</h3>
<p>For each of the query operation (ones starting with <strong>Q</strong>), output a single integer in a line, the result of that query.<br /><br /></p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ S ≤ 1000</li>
<li>1 ≤ N ≤ 10^5</li>
<li>1 ≤ M ≤ 10^9</li>
<li>1 ≤ T ≤ 10^5</li>
<li>abs(R[i]) ≤ 1000</li>
<li>1 ≤ A,B,X,Y ≤ N</li>
</ul>
<p><br /></p>
<h3>Sample Input</h3>
<p>5 10 4<br /><br />
10 -6 -7 11 12<br /><br />
U 1 5 3<br /><br />
Q 2 4<br /><br />
U 2 9 3<br /><br />
Q 3 9<br /><br /></p>
<h3>Sample Output</h3>
<p>33<br /><br />
43<br /><br /></p>
<h3>Explanation</h3>
<p>Initially scores of N questions:: 0 0 0 0 0 0 0 0 0 0<br /><br />
Marks After Update :: -7 11 12 10 -6 0 0 0 0 0<br /><br />
Result of Query(Maximum Sum Subarray from 2 to 4)::  33 (11+12+10)<br /><br />
Marks After Update:: -7 -7 11 12 10 -6 -7 11 12 0<br /><br />
Result of Query(Maximum Sum Subarray from 3 to 9)::  43 (11+12+10+(-6)+(-7)+11+12)<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>