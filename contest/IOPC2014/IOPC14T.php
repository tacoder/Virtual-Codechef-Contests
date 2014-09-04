<?php require("../../includes/header.php"); ?><h1>A Study in Combinatorics</h1><div class="content">
<p>Its the day of the final exam of the Combinatorics course.<br /><br />
The question paper consists of <strong>K</strong> sections and there are a total of <strong>N</strong> questions, with ith section consisting of <strong>N<sub>i </sub></strong> questions.<br /><br /></p>
<p>The students can attempt some(possibly all) questions in any order, but there is just one constraint that he/she <strong>cannot attempt two questions of same section consecutively</strong>, i.e. if suppose the student has attempted a question of section 1, then the next question he attempts cannot be of section 1, it has to be of a different section, after which he may choose to attempt a question of section 1. Note that it may not always be possible for a student to attempt all the questions. Also note that, a student can attempt a question atmost once.<br /><br /></p>
<p>Now the teacher has kept some buzzers (represented by integers), such that on going from one question to another, a buzzer has to be pressed. There may be multiple buzzers having the same number and each transition from a question to another is represented by exactly one buzzer. The numbers on the buzzers are in the range <strong>[1,M]</strong>. You can assume that the number of students is enough to encompass all possible combinations of question attempts, as allowed by the above constraint. In short, for every two question <strong>I</strong> and <strong>J</strong>, you are assured that all possible ways in which one can move from question <strong>I</strong> to question <strong>J</strong> is attempted by atleast one student.<br /><br /></p>
<p>Now after the exam is over, the performance of the teacher is evaluated. The teacher had to specify initially as to  which buzzer should be pressed if the student wishes to go from one question to another, keeping in mind the constraint given above. He further had to ensure that given any two questions <strong>I</strong> and <strong>J</strong> (not necessarily of different sections), there must exist at least one student such that the buzzers he/she pressed in between completing question <strong>I</strong> and <strong>J</strong> had different numbers. For example, suppose a student attempts the questions in the order <strong>I</strong>, then <strong>X</strong>, then <strong>Y</strong>, then <strong>J</strong>, and the buzzers pressed in going from <strong>I</strong> to <strong>X</strong>, and <strong>X</strong> to <strong>Y</strong> and <strong>Y</strong> to <strong>J</strong> are all distinct from each other. The teacher has to ensure that there must exist atleast one such student for each pair of questions <strong>I</strong> and <strong>J</strong>.<br /><br /></p>
<p>To successfully pass the evaluation, the teacher should choose a value of <strong>M</strong> which is minimum for that particular question paper and satisfies the constraint as well.<br /><br /></p>
<p>Help in the teacher in finding such a value of M.<br /><br /></p>
<h3>Input Format</h3>
<p>There are several test cases. Each test case consists of 2 lines.<br /><br /><br />
Each test case begins with a single line contains two space-separated integers <strong>N</strong> and <strong>K</strong>.<br /><br />
Next line contains <strong>K</strong> space-separated integers representing the number of questions in each section.<br /><br />
The file ends with a single line <strong>N</strong>=<strong>K</strong>=<strong>0</strong>, which should not be processed.<br /><br /></p>
<h3>Output Format</h3>
<p>Single line denoting the case number as "Case #i: " (without quotes) and value of <strong>M</strong> in the same line.<br /><br /></p>
<h3>Constraints</h3>
<ul>
<li>TestCases ≤ 100 </li>
<li>2 ≤ K ≤ 10<sup>6</sup></li>
<li>1 &lt; N ≤ 10<sup>9</sup></li>
<li>1 ≤ N<sub> i </sub> &lt; 10<sup>9</sup></li>
</ul>
<p><br /></p>
<h3>Sample Input</h3>
<p>5 3<br /><br />
1 1 3<br /><br />
0 0<br /><br /></p>
<h3>Sample Output</h3>
<p>Case #1: 2<br /><br /></p>
<h3>Explanation</h3>
<p>The buzzers can be assigned in the following way :<br /><br />
Questions are denoted as Q(Section No.) . (Ques No.)<br /><br /><br />
Q3.1 -&gt; Q2.1 - Buzzer 1<br /><br />
Q3.2 -&gt; Q2.1 - Buzzer 2<br /><br />
Q3.3 -&gt; Q2.1 - Buzzer 1<br /><br />
Q3.1 -&gt; Q1.1 - Buzzer 1<br /><br />
Q3.2 -&gt; Q1.1 - Buzzer 1<br /><br />
Q3.3 -&gt; Q1.1 - Buzzer 2<br /><br />
Q2.1 -&gt; Q1.1 - Buzzer 1<br /><br /></p>
<p>For the above configuration, there will always be a student who has attempted two questions in such a way that all buzzers pressed in between attempting these two questions are distinct. The above solution may not be unique and there could exist another assignment of buzzers. However the number of buzzers used is the minimum possible.<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>